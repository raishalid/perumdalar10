<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectProvider extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected static function booted()
    {
        static::creating(function ($projectProvider) {
            $projectProvider->slug = Str::slug($projectProvider->provider_name);
        });

        static::updating(function ($projectProvider) {
            $projectProvider->slug = Str::slug($projectProvider->provider_name);
        });
    }
}
