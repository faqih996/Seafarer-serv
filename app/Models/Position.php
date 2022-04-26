<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{

    use SoftDeletes;

    // protected $table = 'departments';

    protected $fillable = [
        'name', 'slug', 'departments_id', 'status', 'about', 'responsibilities'
    ];


    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany('App\Models\PositionGallery', 'position_id', 'id')->withTrashed();
    }

    public function departments()
    {
        return $this->belongsTo('App\Models\Department', 'departments_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Jobs', 'position_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'users_id', 'id');
    }
}
