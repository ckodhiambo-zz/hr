<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kin_infos', function (Blueprint $table) {
            $table->id();
            $table->string('kin_first_name');
            $table->string('kin_last_name');
            $table->string('relationship');
            $table->string('kin_phone');
            $table->string('kin_address');
            $table->string('kin_code');
            $table->string('kin_town');
            $table->string('kin_residence');
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
        Schema::dropIfExists('kin_infos');
    }
}
