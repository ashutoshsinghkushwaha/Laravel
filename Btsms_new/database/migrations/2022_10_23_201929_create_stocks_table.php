<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('asset_sr_no');
            $table->string('model_no');
            $table->string('brand_name');
            $table->string('processor');
            $table->string('storage');
            $table->string('memory');
            $table->string('host_name');
            $table->string('office_address');
            $table->string('asset_type');
            $table->string('owned_by');
            $table->string('company_name')->nullable();
            $table->string('reporting_manag_detail')->nullable();
            $table->string('current_status');
            $table->string('remark')->nullable();
            $table->string('emp_id');
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
        Schema::dropIfExists('stocks');
    }
}
