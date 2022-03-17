<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    protected $fillable = [
        'photos', 'products_id'
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
