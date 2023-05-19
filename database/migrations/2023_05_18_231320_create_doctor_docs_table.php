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
        Schema::create('doctor_docs', function (Blueprint $table) {
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->on('users')->references('id')->cascadeOnDelete();
            $table->string('national_id_document');
            $table->string('graduation_document');
            $table->string('specialization_degree_document');
            $table->string('personal_image');
            $table->string('personal_image_with_id');
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
        Schema::dropIfExists('doctor_docs');
    }
};
