<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('style_description');
            $table->string('style_file');
            $table->string('fabric_source');
            $table->string('measurement_source');
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->string('measurement_shoulder_back');
            $table->string('measurement_chest');
            $table->string('measurement_top_length');
            $table->string('measurement_neck');
            $table->string('measurement_body_stomach');
            $table->string('measurement_sleeves');
            $table->string('measurement_round_sleeves');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
