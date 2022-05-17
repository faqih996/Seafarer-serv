<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailPosition extends Model
{
    use SoftDeletes;

    public $table ='thumbnail_position';

    // protected $table = 'departments';

    protected $fillable = [
        'thumbnail','positions_id'
    ];


    protected $hidden = [

    ];

    public function positions()
    {
        return $this->belongsTo(Position::class, 'positions_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }

}
