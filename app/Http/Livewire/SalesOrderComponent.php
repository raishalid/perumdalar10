<?php

namespace App\Http\Livewire;

use App\Models\Ecommerce\SalesOrder;
use Livewire\Component;



class SalesOrderComponent extends Component
{
    public $salesOrders;
    public $orderNumber;
    public $showAlert;
public $alertType;
public $alertMessage;
public $disableProcessButton = false;
public $disableInputNotes = false;
    
    public function mount()
    {
        $this->orderNumber = session('orderNumber');
        
    }
   
    
public function render()
{
    $this->salesOrders = SalesOrder::with('itemOrder','user.agent')->where('order_number', $this->orderNumber)->get();

    if ($this->salesOrders->isNotEmpty()) {
        $saldo_deposit = $this->salesOrders[0]->user->agent->deposit;
        $total_harga = $this->salesOrders[0]->total_transaction;
        

        // Lakukan operasi lain dengan nilai saldo_deposit dan total_harga
        if ($total_harga > $saldo_deposit) {
            // Jika total harga melebihi deposit, set alert properties
            $this->alertType = 'warning';
            $this->alertMessage = 'Transaksi tidak bisa dilakukan karena jumlah Order melebihi deposit. Silakan lakukan deposit terlebih dahulu.';
            $this->showAlert = true;

            // Nonaktifkan tombol "process" di view
            $this->disableProcessButton = true;
        }
    }

    return view('livewire.sales-order-component');
}

public $notes = '';
public function process()
{
    
    $newNotes = $this->notes;
    
    $salesOrder = SalesOrder::where('order_number', $this->orderNumber)->first();
    $salesOrder->status = 'Payment Confirmed';
    $salesOrder->notes =$newNotes; // Perhatikan perubahan ini
    $salesOrder->save();

    $this->alertType = 'success';
    $this->alertMessage = 'Pembayaran Anda diproses, dan staf kami akan memberitahukan melalui dashboard Anda. Silahkan catat No Order Anda.';
    $this->showAlert = true;
    $this->disableInputNotes = true;
    $this->disableProcessButton = true;
}
}


// public function mount() <----- ini jika tidak pakai parameter
// {
//     $this->salesOrders = SalesOrder::all();
// }
//     public function render()
//     {
//         // dd($this->orderNumber);
//         $this->salesOrders = SalesOrder::with('itemOrder','user')->where('order_number', $this->orderNumber)->get();
     // PENTING !!!!!!!!!!!!!   with diatas, maksudnya adalah mengambil relasi has many yang ada pada SalesOrder Models.
    // PENTING !!!!!!!!!!!  Permasalahan 2 dalam hal diatas adalah mount akan hanya berfungsi sekali saat diload. Jadi jika ada
    // perubahan data maka parameter mount akan membutuhkan render saja, maka mount kemungkinan bisa terhapus. Order Number hilang ???
    // sepertinya tidak ?     
//     if ($this->salesOrders->isNotEmpty()) {
//         $saldo_deposit = $this->salesOrders[0]->user->agent->deposit;
//         $totalharga =  $this->salesOrders[0]->total_price;


//         // Lakukan operasi lain dengan nilai saldo_deposit
//         //hitung dulu depositnya
//         //bandingkan dengan total harga
//         //jika total harga > deposit
//         //kirim pemberitahuan ke view transaksi tidak bisa dilakukan melalui Alert yang ada di view
//         //"Transaksi tidak bisa dilakukan karena jumlah Order, melebihi deposit, silahkan lakukan deposit terlebih dahulu"
//         //Kemudian non aktifkan tombol "process" yang ada diview 
//     }

//         return view('livewire.sales-order-component');
//     }
