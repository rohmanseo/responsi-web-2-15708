<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
             $table->bigIncrements('id_employees'); //big integer AUTO INCREMENT
             $table->bigInteger('id_jobs')->unsigned(); //big integer
             $table->string('name'); //string
             $table->string('email'); //string
             $table->string('phone'); //string
             $table->string('address'); //string
            $table->timestamps();

            $table->foreign('id_jobs')->references('id_jobs')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
