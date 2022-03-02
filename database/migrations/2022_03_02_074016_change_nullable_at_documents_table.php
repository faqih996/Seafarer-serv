<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableAtDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->integer('users_id')->nullable()->change();
            $table->string('docs_number')->nullable()->change();
            $table->string('place_issued')->nullable()->change();
            $table->date('issued_date')->nullable()->change();
            $table->date('expired_date')->nullable()->change();
            $table->string('docs_status')->nullable()->change();
            $table->string('photos')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->integer('users_id')->nullable(false)->change();
            $table->string('docs_number')->nullable(false)->change();
            $table->string('place_issued')->nullable(false)->change();
            $table->date('issued_date')->nullable(false)->change();
            $table->date('expired_date')->nullable(false)->change();
            $table->string('docs_status')->nullable(false)->change();
            $table->string('photos')->nullable(false)->change();
        });
    }
}
