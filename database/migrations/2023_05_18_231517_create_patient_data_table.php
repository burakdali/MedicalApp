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
        Schema::create('patient_data', function (Blueprint $table) {
            $table->foreignId('patient_id');
            $table->foreign('patient_id')->on('users')->references('id')->cascadeOnDelete();
            $table->double('height');
            $table->double('weight');
            $table->boolean('blood_pressure_problems');
            $table->boolean('diabetes');
            $table->boolean('respiratory_system_problems');
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
        Schema::dropIfExists('patient_data');
    }
};
