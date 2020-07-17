<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialmedia', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('LoginId of the account');
            $table->string('twitter')->nullable()->comment('Indicates  url to twitter page');
            $table->string('facebook')->nullable()->comment('Indicates  url to facebook page');
            $table->string('instagram')->nullable()->comment('Indicates  url to instagram page');
            $table->string('github')->nullable()->comment('Indicates  url to github page');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialmedia');
    }
}
