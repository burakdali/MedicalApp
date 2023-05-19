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
        Schema::create('nurse_caring_data', function (Blueprint $table) {
            $table->foreignId('nurse_id');
            $table->foreign('nurse_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('patient_id');
            $table->foreign('patient_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('caring_id');
            $table->foreign('caring_id')->on('carings')->references('id')->cascadeOnDelete();
            $table->boolean('is_active');
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
        Schema::dropIfExists('nurse_caring_data');
    }
};
