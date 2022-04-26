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

    public function user()
    {
        return $this->hasOne('App\Models\User', 'users_id', 'id');
    }

    public function emergency_user()
    {
        return $this->hasMany('App\Models\Position', 'position_id');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Jobs', 'department_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }
}
