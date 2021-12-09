<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_number');//number of [rooms_hotel - tickets_flight - cars]
            $table->integer('duration');//all time reserved
            $table->enum('trip_type',['one_way','two_way'])->nullable();//flight
            $table->enum('class_type',['economy','first_class'])->nullable();//flight
            $table->dateTime('from_time');//(flight [depature] - car [start hour] (hotel strart day)
            $table->dateTime('to_time');//(flight [landing] - car [end hour] (hotel end day)
            $table->unsignedBigInteger('service_id')->nullable();//service has many items
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->unsignedBigInteger('order_id')->nullable();//order has many items
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();
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
        Schema::dropIfExists('items');
    }
}
