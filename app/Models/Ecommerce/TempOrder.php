<?php

namespace App\Models\Ecommerce;

use App\Models\Ecommerce\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'product_id',
        'price',
        'cost',
        'quantity',
        'total_price',
        ];

 public function product()
        {
            return $this->belongsTo(Product::class, 'product_id'); 
           
        }
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id'); 
            
        }       
}
