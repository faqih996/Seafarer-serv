<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableAtExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('base')->nullable()->change();
            $table->integer('users_id')->nullable()->change();
            $table->string('position')->nullable()->change();
            $table->string('job_title')->nullable()->change();
            $table->date('start_of_contract')->nullable()->change();
            $table->date('end_of_contract')->nullable()->change();
            $table->longText('address')->nullable()->change();
            $table->integer('regencies_id')->nullable()->change();
            $table->integer('provinces_id')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('spv_name')->nullable()->change();
            $table->string('institution_phone')->nullable()->change();
            $table->longText('job_descriptions')->nullable()->change();
            $table->renameColumn('photo', 'certificate')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->string('base')->nullable(false)->change();
            $table->integer('users_id')->nullable(false)->change();
            $table->string('position')->nullable(false)->change();
            $table->string('job_title')->nullable(false)->change();
            $table->date('start_of_contract')->nullable(false)->change();
            $table->date('end_of_contract')->nullable(false)->change();
            $table->longText('address')->nullable(false)->change();
            $table->integer('regencies_id')->nullable(false)->change();
            $table->integer('provinces_id')->nullable(false)->change();
            $table->integer('zip_code')->nullable(false)->change();
            $table->string('spv_name')->nullable(false)->change();
            $table->integer('institution_phone')->nullable(false)->change();
            $table->longText('job_descriptions')->nullable(false)->change();
            $table->renameColumn('photo', 'certificate')->nullable(false)->change();
            $table->string('country')->nullable(true)->change();

        });
    }
}
