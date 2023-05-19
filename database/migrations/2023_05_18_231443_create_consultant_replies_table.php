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
        Schema::create('consultant_replies', function (Blueprint $table) {
            $table->foreignId('consultant_id');
            $table->foreign('consultant_id')->on('consultants')->references('id')->cascadeOnDelete();
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->on('users')->references('id')->cascadeOnDelete();
            $table->string('content');
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
        Schema::dropIfExists('consultant_replies');
    }
};
