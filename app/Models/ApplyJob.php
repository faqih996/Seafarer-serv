<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplyJob extends Model
{
    use SoftDeletes;

    public $table = 'apply_job';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'employer_id',
        'applicant_id',
        'job_id',
        'cv',
        'apply_status_id'
    ];

    public function user_applicant()
    {
        return $this->belongsTo('App\Models\User', 'applicant_id', 'id');
    }

    public function user_employer()
    {
        return $this->belongsTo('App\Models\User', 'employer_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Jobs', 'job_id', 'id');
    }

    public function apply_status()
    {
        return $this->belongsTo('App\Models\OrderStatus', 'apply_status_id', 'id');
    }
}
