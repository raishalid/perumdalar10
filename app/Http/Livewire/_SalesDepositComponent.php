<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Ecommerce\SalesDeposit;

class SalesDepositComponent extends Component
{
    public $user_id, $deposit_at, $status, $deposit_amount, $remark;
    public $salesDeposits = []; // Menambahkan properti $salesDeposits untuk menyimpan data SalesDeposit
    public function mount()
    {
        $this->user_id = SalesDeposit::where('user_id', Auth::id())->firstorfail();
        if($this->user_id->isNotEmpty()) {
            $this->salesDeposits = SalesDeposit::where('user_id', Auth::id())->latest()->paginate(20);
        }
    
    }
    public function render()
    {
        return view('livewire.sales-deposit-component', [
            'salesDeposits' => $this->salesDeposits, // Mengirimkan data SalesDeposit ke view
        ]);
    }
}
