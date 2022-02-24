<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PositionGallery extends Model
{
    use SoftDeletes;

    // protected $table = 'departments';

    protected $fillable = [
        'photos','positions_id'
    ];


    protected $hidden = [

    ];

    public function Positions()
    {
        return $this->belongsTo(Position::class, 'positions_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }
}
