<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_document_to_users');
            $table->string('docs_number')->nullable();
            $table->string('place_issued')->nullable();
            $table->date('issued_date')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('docs_status')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
