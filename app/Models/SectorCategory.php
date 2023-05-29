<?php

namespace App\Models;

use App\Models\Sector;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectorCategory extends Model
{
    use HasFactory;
    protected $table = 'sector_categories';
    protected $guarded = ['id'];

    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }

    protected static function booted()
    {
        static::creating(function ($sectorCategory) {
            $sectorCategory->slug = Str::slug($sectorCategory->name);
        });

        static::updating(function ($sectorCategory) {
            $sectorCategory->slug = Str::slug($sectorCategory->name);
        });
    }
}
