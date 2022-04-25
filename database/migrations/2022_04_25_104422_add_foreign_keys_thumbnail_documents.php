<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysThumbnailDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnail_documents', function (Blueprint $table) {
            $table->foreign('document_id', 'fk_thumbnail_document_to_documents')->references('id')
            ->on('documents')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thumbnail_documents', function (Blueprint $table) {
            $table->dropForeign('fk_thumbnail_document_to_documents');
        });
    }
}
