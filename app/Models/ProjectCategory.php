<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'category_description'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    protected static function booted()
    {
        static::creating(function ($projectCategory) {
            $projectCategory->slug = Str::slug($projectCategory->category_name);
        });

        static::updating(function ($projectCategory) {
            $projectCategory->slug = Str::slug($projectCategory->category_name);
        });
    }
}
