<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emergencies extends Model
{
    use SoftDeletes;

    public $table = 'emergencies';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'family_name', 'relations', 'detail_user_id', 'contact1', 'contact2', 'email', 'address', 'regencies_id', 'provinces_id',
        'zip_code', 'country'
    ];

    protected $hidden = [

    ];

    // one to many
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    }
}
