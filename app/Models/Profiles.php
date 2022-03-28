<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profiles extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photos', 'users_id', 'birth_place', 'birth_date', 'about_me', 'phone_number',
        'address', 'regencies_id', 'provinces_id', 'zip_code', 'country', 'occupation',
        'skype', 'start_date', 'gender', 'marital'
    ];

    protected $hidden = [

    ];

    public function users(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
