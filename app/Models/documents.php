<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documents extends Model
{
    use SoftDeletes;

    public $table = 'documents';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name', 'slug', 'detail_user_id', 'docs_number', 'place_issued', 'issued_date', 'expired_date', 'docs_status', 'photos'
    ];


    protected $hidden = [

    ];

    // one to many
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    }

}
