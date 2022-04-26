<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'roles',
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

    // one to one relation
    public function detail_user()
    {
        return $this->hasOne('App\Models\DetailUser', 'users_id');
    }

    //one to many
    public function job()
    {
        return $this->hasMany('App\Models\Job', 'users_id');
    }

    public function job_applicant()
    {
        return $this->hasMany('App\Models\ApplyJob', 'applicant_id');
    }

    public function job_employer()
    {
        return $this->hasMany('App\Models\ApplyJob', 'employer_id');
    }


}
