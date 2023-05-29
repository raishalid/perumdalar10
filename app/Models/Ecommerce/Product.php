<?php

namespace App\Models\Ecommerce;

use App\Models\Ecommerce\ItemOrder;
use App\Models\Ecommerce\TempOrder;
use App\Models\Ecommerce\ProductBrand;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ecommerce\ProductCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'description',
            'sku',
            'barcode',
            'category_id',
            'brand_id',
            'price',
            'cost',
            'discount',
            'quantity',
            'weight',
            'package',
            'pict1',
            'pict2',
            'active',
            ];

     public function productBrand()
            {
                return $this->belongsTo(ProductBrand::class, 'brand_id');
            }
      public function productCategory()
            {
                return $this->belongsTo(ProductCategory::class, 'category_id');
            }
            public function itemOrder()
            {
                return $this->hasMany(ItemOrder::class);
            }
            public function tempOrder()
            {
                return $this->hasMany(TempOrder::class, 'product_id');
            }
}
