<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->enum('service_type',['hotel','car','flight']);
            $table->boolean('availability');//all
            $table->enum("room_type",['single',"double","triple","quad","queen","king"])->nullable();//hotel
            $table->string("hotel_location")->nullable();//hotel
            $table->string('from_location')->nullable();//flight or car
            $table->string('to_location')->nullable();//flight or car
            $table->string('car_brand')->nullable();//car
            $table->float('price');//all
            $table->unsignedBigInteger('contact_id')->nullable();//supplier has many services
            $table->foreign('contact_id')->references('id')->on('contacts')->cascadeOnDelete();
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
        Schema::dropIfExists('services');
    }
}
