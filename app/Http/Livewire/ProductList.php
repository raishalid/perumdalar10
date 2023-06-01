<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Livewire\OrderComponent;
use App\Models\Ecommerce\Vendor;
use App\Models\Ecommerce\Product;
use Illuminate\Support\Collection;
use App\Models\Ecommerce\TempOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\Ecommerce\ProductBrand;
use App\Models\Ecommerce\ProductParent;
use Illuminate\Support\Facades\Session;
use App\Models\Ecommerce\ProductCategory;




class ProductList extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $selectedCategory;
    public $selectedBrand;
    public $selectedParent;
    public $selectedVendor;
    public $searchTerm;
    public $showActiveOnly = false;
    protected $rules = [ 'inputA' => 'required|numeric',];
    public $inputA = [];
    public $message;
    
    public function processCart($productId,$inputA)
    {
     
                $user = Auth::user();
                $userId = $user->id;
                $product = Product::find($productId);
                $productName = $product->name;
                $productDiscount = $product->discount;
                $productCost=$product->cost;
                $productPackage=$product->package;
                $productPrice=$product->price;
                        if (!$user || !$product || $inputA <= 0) {
                            return;
                        }
                     $hasil = $productPrice * $inputA;
 
                     $existingOrder = TempOrder::where('user_id', $user->id)
                    ->where('product_id', $product->id)
                    ->first();

                    if ($existingOrder) {
                        $inputA += $existingOrder->quantity;
                        $hasil+= $existingOrder->total_price;
                    }

                $tempOrder = TempOrder::updateOrCreate(
                ['user_id' => $userId, 
                'product_id' => $product->id],
                [
                    'order_number' => 'ORD' . $userId, //menghasilkan order number yang berbeda perproduk ?? goblok
                    'price' => $productPrice,
                    'quantity' => $inputA,
                    'total_price' => $hasil,
                ]

            

     );



                $this->inputA[$productId] = 0;
                reset($this->inputA);
                // $this->call('OrderComponent@segarkan');
                $this->emit('segarkan');

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
           
        }

        $products = $query->with('productBrand', 'productBrand.vendor', 'productCategory', 'productCategory.productParent')->paginate(5);
        $brands = ProductBrand::all();
        $categories = ProductCategory::all();
        $parents = ProductParent::all(); 
        $vendors = Vendor::all();




        return view('livewire.product-list', ['products' => $products, 'brands' => $brands,
        'categories' => $categories,
        'parents' => $parents,
        'vendors' => $vendors,
        'deposit' => $deposit,
            
     ]);

     
       
    }
    
   





}
