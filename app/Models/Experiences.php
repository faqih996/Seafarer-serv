<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experiences extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'base', 'users_id', 'position', 'job_title', 'start_of_contract', 'end_of_contract', 'address', 'regencies_id', 'provinces_id',
        'zip_code', 'country',  'spv_name', 'institution_phone', 'job_descriptions', 'certificate'
    ];

    protected $hidden = [

    ];

    public function users(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
