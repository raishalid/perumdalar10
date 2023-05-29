<?php

namespace App\Models\Ecommerce;



use App\Models\Ecommerce\ProductBrand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
    ];
    public function productBrand()
    {
        return $this->hasMany(ProductBrand::class, 'vendor_id');
    }

}
