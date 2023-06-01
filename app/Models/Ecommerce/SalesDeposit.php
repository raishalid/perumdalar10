<?php

namespace App\Models\Ecommerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesDeposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'deposit_at',
        'status',
        'deposit_amount',
        'remark',
        'verified_by',
        'verified_at',
        ];
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
