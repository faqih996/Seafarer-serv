<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educations extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'educations';

    protected $fillable = [
        'name', 'detail_user_id', 'course', 'start', 'graduate',
        'address', 'regencies', 'provinces', 'zip_code', 'country', 'certificate'
    ];

    protected $hidden = [

    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    }
}
