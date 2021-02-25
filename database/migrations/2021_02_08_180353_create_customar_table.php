<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customar', function (Blueprint $table) {
          $table->increments('customar_id');
          $table->string('customar_name');
          $table->string('customar_email');
          $table->string('customar_phone');
          $table->string('customar_address');
          $table->string('customar_photo');
          $table->string('shop_name');
          $table->string('account_holder');
          $table->string('account_number');
          $table->string('bank_name');
          $table->string('bank_branch');
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
        Schema::dropIfExists('customar');
    }
}
