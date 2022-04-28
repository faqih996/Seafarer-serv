<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_detail_user_to_users');
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('gender')->nullable();
            $table->date('marital')->nullable();
            $table->string('about_me')->nullable();
            $table->integer('phone_number')->nullable();
            $table->longText('address')->nullable();
            $table->integer('regencies_id')->nullable();
            $table->integer('provinces_id')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('occupation')->nullable();
            $table->date('start_date')->nullable();

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
        Schema::dropIfExists('detail_user');
    }
}
