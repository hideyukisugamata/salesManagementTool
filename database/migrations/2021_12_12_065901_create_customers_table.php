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
            $table->unsignedBigInteger('id')->primary();
            $table->foreignId('user_id')->constrained();
            $table->string('customer_name',191);
            $table->integer('customer_phone_number')->nullable();
            $table->string('customer_address',191)->nullable();
            $table->string('customer_email',191)->nullable();
            $table->date('customer_birthday')->nullable();
            $table->string('customer_remarks',1000)->nullable();
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
