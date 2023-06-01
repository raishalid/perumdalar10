<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Agent;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Ecommerce\SalesOrder;
use App\Models\Ecommerce\SalesDeposit;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function agent()
    {
        return $this->hasOne(Agent::class,'user_id');
    }
    public function salesOrder()
    {
        return $this->hasMany(SalesOrder::class,'user_id');
    }
    public function tempOrder()
    {
        return $this->hasMany(User::class,'user_id');
    }
    public function salesDeposit()
    {
        return $this->hasMany(SalesDeposit::class,'user_id');
    }

}
