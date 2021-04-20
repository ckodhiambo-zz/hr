<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnboardedTable extends Migration
{
    public function up()
    {
        Schema::create('onboarded', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')
                  ->references('id')
                  ->on('employees')
                  ->constrained()
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('onboarded');
    }
}
