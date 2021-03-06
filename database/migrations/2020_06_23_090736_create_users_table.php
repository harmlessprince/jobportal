<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('Unique Identifier for each row');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedInteger('authority_id')->comment('The user authority on the app');
            $table->string('username');
            $table->boolean('approved')->default(false)->comment('This explains if user account is approved or not');
            $table->boolean('status')->default(false)->comment('This explains if user account is active or inactive');
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('authority_id')->references('id')->on('authorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
