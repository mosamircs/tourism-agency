<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->enum('contact_type',['supplier','customer']);
            $table->enum('supplier_type',['hotel','car','flight'])->nullable();
            $table->string('contact_name');//supplier or customer name
            $table->string('personal_id',14)->unique()->nullable(); //customer personal id
            $table->integer('vat_id')->unique()->nullable();//supplier
            $table->integer('coc')->unique()->nullable();//supplier
            $table->string('phone',11)->unique();//customer or supplier phone
            $table->string('email')->unique();//customer or supplier email
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
        Schema::dropIfExists('contacts');
    }
}
