<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectorFeature extends Model
{
    use HasFactory;
    protected $table = 'sector_features';
    protected $guarded = ['id'];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    protected static function booted()
    {
        static::creating(function ($sectorFeature) {
            $sectorFeature->slug = Str::slug($sectorFeature->name);
        });

        static::updating(function ($sectorFeature) {
            $sectorFeature->slug = Str::slug($sectorFeature->name);
        });
    }
}
