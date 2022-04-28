<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;

    public $table = 'detail_user';

    protected $fillable = [
        'photos', 'users_id', 'birth_place', 'birth_date', 'about_me', 'phone_number',
        'address', 'regencies_id', 'provinces_id', 'zip_code', 'country', 'occupation',
        'skype', 'start_date', 'gender', 'marital'
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $hidden = [

    ];

    // one to one relation
    public function user()
    {
        return $this->belongsTo(DetailUser::Class, 'users_id', 'id');
    }

        //one to many
    public function experience_user()
    {
        return $this->hasMany(ExperienceUser::class, 'detail_user_id');
    }

    public function education_user()
    {
        return $this->hasMany('App\Models\Educations', 'detail_user_id');
    }

    public function emergency_user()
    {
        return $this->hasMany('App\Models\Emergencies', 'detail_user_id');
    }

    public function document_user()
    {
        return $this->hasMany('App\Models\Document', 'detail_user_id');
    }
}
