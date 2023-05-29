<?php

namespace App\Models;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgentCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    public function agents()
    {
        return $this->hasMany(Agent::class, 'agentcategories_id');
    }
}
