<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_attachments', function (Blueprint $table) {
            $table->foreignId('article_id');
            $table->foreign('article_id')->on('articles')->references('id')->cascadeOnDelete();
            $table->string('title', 100);
            $table->string('file');
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
        Schema::dropIfExists('article_attachments');
    }
};
