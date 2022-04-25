<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('detail_user_id')->nullable()->index('fk_education_to_detail_user');
            $table->string('course')->nullable();
            $table->date('start')->nullable();
            $table->date('graduate')->nullable();
            $table->longText('address')->nullable();
            $table->integer('regencies_id')->nullable();
            $table->integer('provinces_id')->nullable();
            $table->string('country')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('certificate')->nullable();

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
        Schema::dropIfExists('educations');
    }
}
