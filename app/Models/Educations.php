<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educations extends Model
{
    use SoftDeletes;

    public $table = 'educations';

    protected $fillable = [
        'name', 'detail_user_id', 'course', 'start', 'graduate',
        'address', 'regencies_id', 'provinces_id', 'zip_code', 'country', 'certificate'
    ];

    protected $hidden = [

    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function users(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
