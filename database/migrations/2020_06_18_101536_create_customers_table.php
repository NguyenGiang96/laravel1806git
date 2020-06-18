<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('customer_name',50);
            $table->string('contact_lastname',50);
            $table->string('contact_firstname',50);
            $table->integer('phone');
            $table->string('address_line1',100);
            $table->string('address_line2',100);
            $table->string('city',50);
            $table->string('state',50);
            $table->integer('postal_code',10);
            $table->string('country',50);
            $table->integer('sales_rep_employment_number');
            $table->integer('credit_limit');



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
        Schema::dropIfExists('customers');
    }
}
