<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
          $table->increments('supplier_id');
          $table->string('supplier_name');
          $table->string('supplier_email');
          $table->string('supplier_phone');
          $table->string('supplier_address');
          $table->string('supplier_photo');
          $table->string('shop_name');
          $table->string('account_holder');
          $table->string('account_number');
          $table->string('bank_name');
          $table->string('bank_branch');
          $table->string('city');
          $table->string('type');
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
        Schema::dropIfExists('supplier');
    }
}
