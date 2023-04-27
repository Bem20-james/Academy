<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('admin');
            $table->integer('admin_role');
            $table->string('post_code');
            $table->integer('country');
            $table->string('country_code');
            $table->string('name');
            $table->string('logo');
            $table->string('welc_msg')->nullable();
            $table->string('email');
            $table->string('facebook_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('address_three')->nullable();
            $table->string('contact');
            $table->text('about_us', 20000);
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
        Schema::dropIfExists('settings');
    }
};
