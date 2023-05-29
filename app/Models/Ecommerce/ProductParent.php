<?php

namespace App\Models\Ecommerce;

use App\Models\Ecommerce\ProductCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductParent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
       
    ];
    public function productCategory()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

}
