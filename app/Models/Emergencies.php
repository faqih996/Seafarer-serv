<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emergencies extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'family_name', 'relations', 'users_id', 'contact1', 'contact2', 'email', 'address', 'regencies_id', 'provinces_id',
        'zip_code', 'country'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
