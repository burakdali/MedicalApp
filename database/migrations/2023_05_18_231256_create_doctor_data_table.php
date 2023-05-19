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
        Schema::create('doctor_data', function (Blueprint $table) {
            $table->foreignId('doctor_id');
            $table->foreign('doctor_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('specialization_id');
            $table->foreign('specialization_id')->on('specializations')->references('id')->cascadeOnDelete();
            $table->boolean('is_approved');
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
        Schema::dropIfExists('doctor_data');
    }
};
