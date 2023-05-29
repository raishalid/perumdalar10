<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Ecommerce\Vendor;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\TempOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\Ecommerce\ProductBrand;
use App\Models\Ecommerce\ProductParent;
use App\Models\Ecommerce\ProductCategory;
use Illuminate\Support\Collection;


class ProductList extends Component
{

    use WithPagination;

    public $selectedCategory;
    public $selectedBrand;
    public $selectedParent;
    public $selectedVendor;
    public $searchTerm;
    public $showActiveOnly = false;



    // public $inputA;
    // A = Qty input dari view
    protected $rules = [ 'inputA' => 'required|numeric',];
    
    
    
    public $inputA = [];

// public function decrementInputA()
// {
//     if (isset($this->inputA) && $this->inputA > 0) {
//         $this->inputA--;
//     }
// }

// public function incrementInputA()
// {
//     if (!isset($this->inputA)) {
//         $this->inputA = 0;
//     }
//     $this->inputA++;
// }

public function processCart($productId,$inputA)
{
    
    // $this->validate();


     $user = Auth::user();
     $userId = $user->id;
     $deposit = $user->agent->deposit;
     $product = Product::find($productId);
     if (!$user || !$product || $inputA <= 0) {
        return ;
    }

     $productName = $product->name;
     $productDiscount = $product->discount;
     $productCost=$product->cost;
     $productPackage=$product->package;
     $productPrice=$product->price;
     $hasil = $productPrice * $inputA;
      dd($productId, $inputA,$productPrice, $hasil, $userId,$productName,$deposit,$productDiscount,$productCost,$productPackage);
    //  dd($userId, $deposit,$productName,$productId, $result , $this->inputA, $productDiscount,$productPackage, $productCost);
     $this->inputA[$productId] = 0;
   reset($this->inputA);
}
   
    //ini cara mengambil kuantity hasil perhitungan di view

    public function mount()
    {
        // $this->listeners = ['refreshComponent' => '$refresh'];
        $this->listeners = ['refreshComponent' => '$refresh', 'addToCartClicked' => 'addToCart'];
       
    }
    
    public function hydrate()
    {
        // $this->listeners = ['refreshComponent' => '$refresh'];
        $this->listeners = ['refreshComponent' => '$refresh', 'addToCartClicked' => 'addToCart'];
    }

    public function render()
    {
        $query = Product::query();

        if ($this->selectedCategory) {
            $query = $query->whereHas('productCategory', function ($q) {
                $q->where('id', $this->selectedCategory);
            });
        }

        if ($this->selectedBrand) {
            $query = $query->whereHas('productBrand', function ($q) {
                $q->where('id', $this->selectedBrand);
            });
        }

        if ($this->selectedParent) {
            $query = $query->whereHas('productCategory.productParent', function ($q) {
                $q->where('id', $this->selectedParent);
            });
        }

        if ($this->selectedVendor) {
            $query = $query->whereHas('productBrand.vendor', function ($q) {
                $q->where('id', $this->selectedVendor);
            });
        }

        if ($this->searchTerm) {
            $query = $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        if ($this->showActiveOnly) {
            $query = $query->where('active', true);
        }
        $user = Auth::user();
        // dd($user->agent->deposit);
        if ($user && $user->agent) {
            $deposit = $user->agent->deposit;
        } else {
            // Handle kasus ketika user tidak memiliki agent atau user tidak ditemukan
        }

        $products = $query->with('productBrand', 'productBrand.vendor', 'productCategory', 'productCategory.productParent')->paginate(5);
        $brands = ProductBrand::all();
        $categories = ProductCategory::all();
        $parents = ProductParent::all(); // Ganti ini dengan model yang benar
        $vendors = Vendor::all();

        $tempOrders = TempOrder::where('user_id', Auth::id())->get();


        return view('livewire.product-list', ['products' => $products, 'brands' => $brands,
        'categories' => $categories,
        'parents' => $parents,
        'vendors' => $vendors,
        'deposit' => $deposit,
        'tempOrders' => $tempOrders,             ]);
       
    }
    
    // public function addToCart($productId, $quantity)
    // {
    //     $quantity = (int)$quantity;
    
    //     $user = Auth::user();
    //     $product = Product::find($productId);
    
    //     if (!$user || !$product || $quantity <= 0) {
    //         return;
    //     }
    
    //     $price = $product->price;
    
    //     // Cari TempOrder yang sudah ada
    //     $existingOrder = TempOrder::where('user_id', $user->id)
    //         ->where('product_id', $product->id)
    //         ->first();
    
    //     if ($existingOrder) {
    //         // Jika TempOrder sudah ada, tambahkan kuantitas baru
    //         $quantity += $existingOrder->quantity;
    //     }
    
    //     $totalPrice = $quantity * $price;
    //     // dd($totalPrice);
    
    //     if ($user->agent->deposit < $totalPrice) {
    //         return;
    //     }
    
    //     // Buat atau perbarui TempOrder
    //     $tempOrder = TempOrder::updateOrCreate(
    //         ['user_id' => $user->id, 'product_id' => $product->id],
    //         [
    //             'order_number' => 'ORD' . strtoupper(Str::random(10)),
    //             'price' => $price,
    //             'quantity' => $quantity,
    //             'total_price' => $totalPrice,
    //         ]
    //     );
    // }
    public function addToCart($productId, $quantity)
    {
        // dd($productId, $quantity);
        $quantity = (int)$quantity;
    
        $user = Auth::user();
        $product = Product::find($productId);
    
        if (!$user || !$product || $quantity <= 0) {
            return;
        }
    
        $price = $product->price;
    
        // Cari TempOrder yang sudah ada
        $existingOrder = TempOrder::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();
    
        if ($existingOrder) {
            // Jika TempOrder sudah ada, tambahkan kuantitas baru
            $quantity += $existingOrder->quantity;
        }
    
        $totalPrice = $quantity * $price;
    
        if ($user->agent->deposit < $totalPrice) {
            return;
        }
    
        // Buat atau perbarui TempOrder
        $tempOrder = TempOrder::updateOrCreate(
            ['user_id' => $user->id, 'product_id' => $product->id],
            [
                'order_number' => 'ORD' . strtoupper(Str::random(10)),
                'price' => $price,
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ]
        );
    }





}
