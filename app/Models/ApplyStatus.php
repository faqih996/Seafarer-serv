<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplyStatus extends Model
{
    use SoftDeletes;

    public $table ='status';

    protected $date =[
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function apply_job()
    {
        return $this->hasMany('App\Models\ApplyJobs', 'apply_status_id',);
    }
}
