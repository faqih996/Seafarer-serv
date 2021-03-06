<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->foreign('users_id', 'fk_position_to_users')->references('id')
            ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('departments_id', 'fk_departments_id_to_positions')->references('id')
            ->on('departments')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropForeign('fk_position_to_users');
            $table->dropForeign('fk_departments_id_to_positions');
        });
    }
}
