<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Support\Str;
use App\Models\Ecommerce\ItemOrder;
use App\Models\Ecommerce\TempOrder;
use App\Models\Ecommerce\SalesOrder;
use Illuminate\Support\Facades\Auth;

class OrderComponent extends Component
{
    public $tempOrders;
    public $rules = [];



    protected $listeners = ['segarkan' => '$refresh'];

    public function mount()
    {
        $this->rules = [
            'tempOrders.*.quantity' => 'required|numeric|min:0', // Aturan validasi untuk quantity
        ];
    }

    public function render()
    {
        $this->tempOrders = TempOrder::where('user_id', Auth::id())->get();
        $user = Auth::user();
        $deposit = $user->agent->deposit;

        return view('livewire.order-component', [
            'tempOrders' => $this->tempOrders, 
            'deposit' => $deposit,
        ]);
    }



    public function deleteOrder($id)
{
    // dd($id);
    // Cari data berdasarkan ID
    $order = TempOrder::find($id);


    if ($order) {
        // Hapus data jika ditemukan
        $order->delete();

        // Berikan notifikasi atau flash message jika diperlukan
        session()->flash('message', 'Data berhasil dihapus.');
    }
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
  
    public function paymentVerified() {
        $tempOrders = TempOrder::with('product')->where('user_id', Auth::id())->get();
        $user = Auth::user();
        $deposit = $user->agent->deposit;
        // Setel order_number
         $orderNumber = 'ORD'. uniqid() ;
        foreach ($tempOrders as $tempOrder) {
            // Buat entri baru dalam detil_order
                     $itemOrder = new ItemOrder();
                     // Salin nilai-nilai dari temp_orders ke detil_order
                     $itemOrder->user_id = $user->id;
                     $itemOrder->order_number = $orderNumber;
                     $itemOrder->product_id = $tempOrder->product_id;
                     $itemOrder->price = $tempOrder->price;
                     $itemOrder->quantity = $tempOrder->quantity;
                     $itemOrder->total_price = $tempOrder->total_price;

                     $itemOrder->save();
                    }
                    TempOrder::where('user_id', Auth::id())->delete();
                    
                    // $orderNumber = $tempOrder->order_number;
                    
                   self::setSalesOrder($orderNumber);

        


    }


     public function setSalesOrder($orderNumber)
            {
                $user = Auth::user();
                $deposit = $user->agent->deposit;
                // $coupon = $user->agent->coupon;
                $status = "Payment Process";
                $remark = "apasaja remarknya";
                $notes = "apasaja notesnya";
                $totalOrder = ItemOrder::where('order_number', $orderNumber)
                ->sum(\DB::raw('price * quantity'));


                $salesOrder = SalesOrder::firstOrNew(['order_number' => $orderNumber]);

                // // Setel nilai kolom pada master_order
                $salesOrder->user_id = $user->id;
                $salesOrder->order_number = $orderNumber;
                $salesOrder->status = $status;
                $salesOrder->total_transaction = $totalOrder;
            //  $salesOrder->coupon = $coupon;
                //  $salesOrder->deposit = $deposit - $totalOrder; unknown $totalorder
                $salesOrder->save();
             //   dd($orderNumber);
            // redirect ke salesorder master order
                redirect()->to('/salesorder')->with('orderNumber', $orderNumber);
                // return redirect('/salesorder/' . $order_number);
            }
        }
