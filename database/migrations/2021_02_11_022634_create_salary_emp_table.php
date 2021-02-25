<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_emp', function (Blueprint $table) {
           $table->increments('salary_id');
           $table->integer('emp_id');
           $table->string('month');
           $table->string('year');
           $table->string('advance_salary');
           $table->TinyInteger ('publication_status')->default('0');
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
        Schema::dropIfExists('salary_emp');
    }
}
