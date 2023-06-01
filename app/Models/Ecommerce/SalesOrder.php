<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use App\Models\Ecommerce\ItemOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'order_at',
        'total_transaction',
        'status',
        'remark',
        'notes',
        'verified_by',
        'verified_at',
        ];

    public function itemOrder()
        {
            return $this->hasMany(ItemOrder::class, 'order_number','order_number');
            // maksudnya adalah bahwa Sales Order pada fungsi itemOrder memiliki field yang berelasi dan bukan dengan 'id' salah satu keduanya.
        }
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
