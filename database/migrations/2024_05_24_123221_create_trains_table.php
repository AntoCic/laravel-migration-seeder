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
            $table->string('agency',100);
            $table->string('departure_station',100);
            $table->dateTime('departure_time',$precision = 0);
            $table->string('arrival_station',100);
            $table->dateTime('arrival_time',$precision = 0);
            $table->string('train_code',20);
            $table->smallInteger('number_carriages');
            $table->boolean('in_time')->default(true);
            $table->boolean('delate')->default(false);
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
