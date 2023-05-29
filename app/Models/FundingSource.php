<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FundingSource extends Model
{
    use HasFactory;
    // protected $fillable = ['fundingsource_name', 'fundingsource_description'];
    protected $guarded = ['id'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected static function booted()
    {
        static::creating(function ($fundingSource) {
            $fundingSource->slug = Str::slug($fundingSource->fundingsource_name);
        });

        static::updating(function ($fundingSource) {
            $fundingSource->slug = Str::slug($fundingSource->fundingsource_name);
        });
    }
}
