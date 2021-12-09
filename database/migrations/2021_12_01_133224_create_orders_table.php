<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('payment_status',['now','later']);
            $table->enum('payment_method',['cash','credit']);
            $table->float('margin');//the rate of my benefits
            $table->float('discount')->nullable();
            $table->float('total_price');//total benefits
            $table->unsignedBigInteger('contact_id');//contact table relatrion
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
        Schema::dropIfExists('orders');
    }
}
