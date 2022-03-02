<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeAndNullableAtProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('photos')->nullable()->change();
            $table->integer('users_id')->nullable()->change();
            $table->string('birth_place')->nullable()->change();
            $table->date('birth_date')->nullable()->change();
            $table->string('about_me')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->longText('address')->nullable()->change();
            $table->integer('regencies_id')->nullable()->change();
            $table->integer('provinces_id')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('occupation')->nullable()->change();
            $table->date('start_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('photos')->nullable(false)->change();
            $table->integer('users_id')->nullable(false)->change();
            $table->string('birth_place')->nullablefalse()->change();
            $table->date('birth_date')->nullable(false)->change();
            $table->string('about_me')->nullablefalse()->change();
            $table->integer('phone_number')->nullable(false)->change();
            $table->longText('address')->nullable(false)->change();
            $table->integer('regencies_id')->nullable(false)->change();
            $table->integer('provinces_id')->nullable(false)->change();
            $table->integer('zip_code')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->string('occupation')->nullable(false)->change();
            $table->date('start_date')->nullable(false)->change();
        });
    }
}
