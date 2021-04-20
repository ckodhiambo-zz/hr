<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('national_id');
            $table->string('kra_pin');
            $table->string('nhif_no');
            $table->string('nssf_no');
            $table->string('address');
            $table->string('code');
            $table->string('town');
            $table->string('residence');
            $table->string('acc_name');
            $table->string('acc_no');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->softDeletes();
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
        Schema::dropIfExists('personal_infos');
    }
}
