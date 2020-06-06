<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlightDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_details', function (Blueprint $table) {


            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')
                ->on('flight_dash');

            $table->string('flight_departure_date')->primary();

            $table->double('price');
            $table->integer('available_seats');

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
        //
    }
}
