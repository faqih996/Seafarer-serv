<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableAtEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emergencies', function (Blueprint $table) {
            $table->string('family_name')->nullable()->change();
            $table->string('relations')->nullable()->change();
            $table->string('contact1')->nullable()->change();
            $table->string('contact2')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->longText('address')->nullable()->change();
            $table->integer('regencies_id')->nullable()->change();
            $table->integer('provinces_id')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emergencies', function (Blueprint $table) {
            $table->string('family_name')->nullable(false)->change();
            $table->string('relations')->nullable(false)->change();
            $table->string('contact1')->nullable(false)->change();
            $table->string('contact2')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->longText('address')->nullable(false)->change();
            $table->integer('regencies_id')->nullable(false)->change();
            $table->integer('provinces_id')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->integer('zip_code')->nullable(false)->change();
        });
    }
}
