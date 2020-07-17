<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('LoginId of student that owns the account');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->string('phone_number');
            $table->date('birthday');
            $table->string('avatar')->nullable();
            $table->boolean('badge')->nullable();
            $table->unsignedInteger('function_id')->comment('Id of this student funtion');
            $table->unsignedInteger('industry_id')->comment('Id of this student Industry');
            $table->unsignedInteger('experience_id')->comment('Id of this experience Experience');
            $table->unsignedInteger('availabilty_id')->comment('Id of this student availability');
            $table->text('about_me')->nullable();
            $table->string('cover_letter')->nullable();
            $table->unsignedInteger('worktype_id')->comment('Student preffred work type ID');
            $table->string('salary_expectation');
            $table->string('portfolio')->nullable()->comment('Indicates students url to portfolio page');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('function_id')->references('id')->on('allfunctions');
            $table->foreign('availabilty_id')->references('id')->on('availabilities');
            $table->foreign('industry_id')->references('id')->on('allindustries');
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->foreign('worktype_id')->references('id')->on('worktypes');
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
        Schema::dropIfExists('students');
    }
}
