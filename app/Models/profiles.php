<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profiles extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'photos', 'users_id', 'birth_place', 'birth_date', 'about_me', 'phone_number',
        'address', 'regencies_id', 'provinces_id', 'zip_code', 'country', 'occupation',
        'occupation_places', 'start_date'
    ];

    protected $hidden = [

    ];
}
