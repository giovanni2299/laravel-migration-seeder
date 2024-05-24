<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',25);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->dateTime('departure_time', $precision = 0);
            $table->dateTime('arrival_time', $precision = 0);
            $table->string('train_code',20);
            $table->tinyInteger('coach_number',11);
            $table->boolean('delay')->default(1);
            $table->boolean('deleted');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
