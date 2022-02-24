<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('relations');
            $table->integer('user_id');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('email');
            $table->longText('address');
            $table->integer('regencies_id');
            $table->integer('provinces_id');
            $table->integer('country');
            $table->integer('zip_code');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergencies');
    }
}
