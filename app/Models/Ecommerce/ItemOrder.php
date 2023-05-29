<?php

namespace App\Models\Ecommerce;

use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\SalesOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'cost',
        'quantity',
        ];

 public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
            //salah ini
        }
  public function salesOrder()
        {
            return $this->belongsTo(SalesOrder::class, 'order_id');
        }
}
