<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('photos');
            $table->integer('users_id');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('about_me');
            $table->integer('phone_number');
            $table->longText('address');
            $table->integer('regencies_id');
            $table->integer('provinces_id');
            $table->integer('zip_code');
            $table->string('country');
            $table->string('occupation');
            $table->string('occupation_places');
            $table->date('start_date');

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
        Schema::dropIfExists('profiles');
    }
}
