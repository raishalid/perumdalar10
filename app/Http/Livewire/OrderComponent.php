<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ecommerce\TempOrder;
use Illuminate\Support\Facades\Auth;

class OrderComponent extends Component
{
    public $tempOrders;
    public $rules = [];

    public function mount()
    {
        $this->rules = [
            'tempOrders.*.quantity' => 'required|numeric|min:0', // Aturan validasi untuk quantity
        ];
    }

    public function render()
    {
        $this->tempOrders = TempOrder::where('user_id', Auth::id())->get();

        return view('livewire.order-component', [
            'tempOrders' => $this->tempOrders,
        ]);
    }



    public function updateOrder($orderId)
    {
        // Temukan pesanan berdasarkan ID
        $order = TempOrder::find($orderId);
        
        if ($order) {
            // Lakukan pembaruan pesanan
            $order->quantity = $this->tempOrders->firstWhere('id', $orderId)['quantity'];
            // $order->quantity = $this->tempOrders->firstWhere('id', $orderId)['quantity'];

            $newTotalPrice = $order->quantity*$order->price;
            // dd($order,$order->quantity,$order->price,$order->total_price, $newTotalPrice);
            TempOrder::where('id', $orderId)->update([
                'quantity' => $order->quantity,
                'total_price' =>  $newTotalPrice,
            ]);
            

            $order->save();
        }

    }
    

    protected $listeners = ['segarkan' => 'segarkan'];
    public function segarkan()
    {
        return $this->render();

    }
    
}
