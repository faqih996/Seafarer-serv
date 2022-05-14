<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysThumbnailProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnail_product', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_product_id_to_thumbnail_product')->references('id')
            ->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thumbnail_product', function (Blueprint $table) {
            $table->dropForeign('fk_product_id_to_thumbnail_product');
        });
    }
}
