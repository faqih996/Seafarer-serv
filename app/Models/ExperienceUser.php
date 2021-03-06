<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    use SoftDeletes;

    public $table = 'experience_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'base',
        'detail_user_id',
        'position',
        'job_title',
        'start_of_contract',
        'end_of_contract',
        'address',
        'regencies',
        'provinces',
        'zip_code',
        'country',
        'spv_name',
        'institution_phone',
        'job_descriptions',
        'certificate'
    ];

    protected $hidden = [

    ];

    // one to many
    public function detail_user()
    {
        return $this->belongsTo(DetailUser::class, 'detail_user_id', 'id');
    }
}
