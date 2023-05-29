<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectInvestor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
    protected static function booted()
    {
        static::creating(function ($projectInvestor) {
            $projectInvestor->slug = Str::slug($projectInvestor->filecontract_name);
        });

        static::updating(function ($projectInvestor) {
            $projectInvestor->slug = Str::slug($projectInvestor->filecontract_name);
        });
    }
}
