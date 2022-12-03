<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBluethinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bluethinks', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('name');
            $table->string('technology');
            $table->string('email');
            $table->string('mobile');
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
        Schema::dropIfExists('bluethinks');
    }
}
