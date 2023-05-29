<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = ['id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    protected static function booted()
    {
        static::creating(function ($customer) {
            $customer->slug = Str::slug($customer->name);
        });

        static::updating(function ($customer) {
            $customer->slug = Str::slug($customer->name);
        });
    }
}
