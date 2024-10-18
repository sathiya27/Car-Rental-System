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
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('modelName');
            $table->integer('numOfSeats')->unsigned();
            $table->integer('numOfDoors');
            $table->string('fuelType');
            $table->decimal('pricePerDay', 10, 2);
            $table->boolean('hasAc')->default(true);
            $table->string('carImage')->nullable();
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
        Schema::dropIfExists('car_models');
    }
};
