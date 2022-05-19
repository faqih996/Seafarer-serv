<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{

    use SoftDeletes;

    public $table ='positions';

    // protected $table = 'departments';

    protected $fillable = [
        'name', 'users_id', 'slug', 'departments_id', 'status', 'about',
    ];


    protected $hidden = [

    ];

    public function users(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }

    public function thumbnail()
    {
        return $this->hasMany('App\Models\ThumbnailPosition', 'position_id', 'id')->withTrashed();
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
