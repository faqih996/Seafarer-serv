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
}
