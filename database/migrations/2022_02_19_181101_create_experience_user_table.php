<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('base');
            $table->foreignId('detail_user_id')->nullable()->index('fk_experience_user_to_detail_user');
            $table->string('position');
            $table->string('job_title');
            $table->date('start_of_contract');
            $table->date('end_of_contract');
            $table->longText('address');
            $table->integer('regencies_id');
            $table->integer('provinces_id');
            $table->integer('zip_code');
            $table->string('country');
            $table->string('spv_name');
            $table->integer('institution_phone');
            $table->longText('job_descriptions');
            $table->string('certificate');

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
        Schema::dropIfExists('experiences');
    }
}
