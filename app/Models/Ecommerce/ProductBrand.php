<?php

namespace App\Models\Ecommerce;

use App\Models\Ecommerce\Vendor;
use App\Models\Ecommerce\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'label',
        'vendor_id',
    ];
    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

}
