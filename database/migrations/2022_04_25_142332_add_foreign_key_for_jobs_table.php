<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyForJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('department_id', 'fk_department_id_to_job')->references('id')
            ->on('departments')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('position_id', 'fk_position_id_to_job')->references('id')
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
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('fk_department_id_to_job');
            $table->dropForeign('fk_position_id_to_job');
        });
    }
}
