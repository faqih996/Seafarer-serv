<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyForPositionGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('position_galleries', function (Blueprint $table) {
            $table->foreign('position_id', 'fk_position_id_to_position_gallery')->references('id')
            ->on('positions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('position_galleries', function (Blueprint $table) {
            $table->dropForeign('fk_position_id_to_position_gallery');
        });
    }
}
