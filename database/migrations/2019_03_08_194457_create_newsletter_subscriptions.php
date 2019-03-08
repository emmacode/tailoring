<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterSubscriptions extends Migration
{
    public function up()
    {
        Schema::create('newsletter_subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default("");
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('newsletter_subscriptions');
    }
}
