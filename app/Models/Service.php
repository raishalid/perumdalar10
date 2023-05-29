<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $guarded = ['id'];
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });

        static::updating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }
}
