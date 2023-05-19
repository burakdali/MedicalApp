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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreign('patient_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('specialization_id');
            $table->foreign('specialization_id')->on('specializations')->references('id')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('content');
            $table->boolean('is_replied');
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
        Schema::dropIfExists('consultants');
    }
};
