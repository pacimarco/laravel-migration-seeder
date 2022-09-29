<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency','100');
            $table->date('date');
            $table->string('departureStation','100');
            $table->string('arrivalStation','100');
            $table->time('departureTime', $precision = 0);
            $table->time('arrivalTime', $precision = 0);
            $table->integer('trainCode');
            $table->string('numOfCarriage','4');
            $table->string('inTime','10');
            $table->string('deleted','10');

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
        Schema::dropIfExists('trains');
    }
}
