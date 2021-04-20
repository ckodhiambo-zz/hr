<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyEmployeeTable extends Migration
{
    public function up()
    {
        Schema::create('company_employee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('employee_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_employee');
    }
}
