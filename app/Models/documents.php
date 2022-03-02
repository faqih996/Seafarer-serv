<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documents extends Model
{
    use SoftDeletes;

    // protected $table = 'departments';

    protected $fillable = [
        'name', 'users_id', 'docs_number', 'place_issued', 'issued_date', 'expired_date', 'docs_status', 'photos'
    ];


    protected $hidden = [

    ];

    public function Positions()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
        // panggil modelnya, kemudian sambungkan dengan 'Foreignkey' di tabel yang berelasi, 'primaryKey' dari tabel asli
    }

}
