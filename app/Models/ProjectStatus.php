<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectStatus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    protected static function booted()
    {
        static::creating(function ($projectStatus) {
            $projectStatus->slug = Str::slug($projectStatus->status_name);
        });

        static::updating(function ($projectStatus) {
            $projectStatus->slug = Str::slug($projectStatus->status_name);
        });
    }
}
