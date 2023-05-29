<?php

namespace App\Models;

use App\Models\Investor;
use App\Models\ProjectFile;
use Illuminate\Support\Str;
use App\Models\FundingSource;
use App\Models\ProjectStatus;
use App\Models\ProjectCategory;
use App\Models\ProjectProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_category_id',
        'project_provider_id',
        'project_status_id',
        'funding_source_id',
        'project_name',
        'project_description',
        'project_budget',
        'project_target',
        'project_start',
        'project_duration',
        'project_html',
        'project_headgbr'
    ];
    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }

    public function provider()
    {
        return $this->belongsTo(ProjectProvider::class, 'project_provider_id');
    }

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class, 'project_status_id');
    }

    public function fundingSource()
    {
        return $this->belongsTo(FundingSource::class);
    }

    public function investors()
    {
        return $this->belongsToMany(Investor::class, 'project_investors')->withPivot('contribution_amount');
    }

    public function files()
    {
        return $this->hasMany(ProjectFile::class);
    }
    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->project_name);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->project_name);
        });
    }
}
