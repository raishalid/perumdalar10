<?php

namespace App\Models\Ecommerce;
use App\Models\Ecommerce\ProductParent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'parent_id',
    ];

    // setiap pemanggilan class ProductCategory ini dengan metod productParent, saya mengembalikan nilai
    // bahwa kaitan model dengan model ProductParent adalah 1 ke n
    public function productParent()
    {
        return $this->belongsTo(ProductParent::class, 'parent_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

}
