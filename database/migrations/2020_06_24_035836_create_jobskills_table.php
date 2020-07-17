<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobskills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->comment('Company ID');
            $table->unsignedInteger('portaljob_id')->comment('Job ID');
            $table->string('skill')->nullable();
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('portaljob_id')->references('id')->on('portaljobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobskills');
    }
}
