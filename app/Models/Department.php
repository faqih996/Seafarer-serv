<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Department extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'status'
    ];

    protected $hidden = [

    ];

    public function users(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
