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
        return $this->hasMany(PositionGallery::class, 'position_id', 'id')->withTrashed();
    }

    public function Departments()
    {
        return $this->belongsTo(Department::class, 'departments_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }
}
