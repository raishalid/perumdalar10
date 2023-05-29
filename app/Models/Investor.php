<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Investor extends Model
{
    use HasFactory;
    protected $fillable = ['investor_name', 'investor_info'];
    // protected $guarded = ['id'];


    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_investors')->withPivot('contribution_amount', 'ownership_percentage');
    }

    protected static function booted()
    {
        static::creating(function ($investor) {
            $investor->slug = Str::slug($investor->investor_name);
        });

        static::updating(function ($investor) {
            $investor->slug = Str::slug($investor->investor_name);
        });
    }
}
