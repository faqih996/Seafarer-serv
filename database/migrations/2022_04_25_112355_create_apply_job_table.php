<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable()->index('fk_applicant_job_to_users');
            $table->foreignId('job_id')->nullable()->index('fk_apply_job_to_job');
            $table->longText('cv')->nullable();
            $table->foreignId('apply_status_id')->nullable()->index('fk_apply_job_to_apply_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_job');
    }
}
