<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailProduct extends Model
{

    use softDeletes;

    public $table ='thumbnail_product';

        protected $date =[
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'thumbnail', 'product_id'
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
