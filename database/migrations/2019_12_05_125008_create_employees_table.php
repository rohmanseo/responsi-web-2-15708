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
        Schema::create('', function (Blueprint $table) {
            // $table->('id_employees'); big integer AUTO INCREMENT
            // $table->('id_jobs')->unsigned(); big integer
            // $table->('name'); string
            // $table->('email'); string
            // $table->('phone'); string
            // $table->('address'); string
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
