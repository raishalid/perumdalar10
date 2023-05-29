<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectFile extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    protected static function booted()
    {
        static::creating(function ($projectFile) {
            $projectFile->slug = Str::slug($projectFile->file_name);
        });

        static::updating(function ($projectFile) {
            $projectFile->slug = Str::slug($projectFile->file_name);
        });
    }
}
