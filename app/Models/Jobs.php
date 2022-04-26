<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{
    use SoftDeletes;

    public $table = 'jobs';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'department_id',
        'position_id',
        'placement',
        'detail'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function apply_job()
    {
        return $this->hasMany('App\Models\ApplyJob', 'job_id');
    }

    public function department()
    {
        return $this->hasMany('App\Models\department', 'department_id');
    }

    public function position()
    {
        return $this->hasMany('App\Models\position', 'position_id');
    }

}
