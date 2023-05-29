<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Support\Str;
use App\Models\SectorCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;
    protected $table = 'sectors';
    protected $guarded = ['id'];

    public function features()
    {
        return $this->hasMany(SectorFeature::class);
    }

    public function sectorCategory()
    {
        return $this->belongsTo(SectorCategory::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    protected static function booted()
    {
        static::creating(function ($sector) {
            $sector->slug = Str::slug($sector->name);
        });

        static::updating(function ($sector) {
            $sector->slug = Str::slug($sector->name);
        });
    }
}
