<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortaljobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portaljobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('function_id');
            $table->unsignedInteger('industry_id');
            $table->boolean('status')->default(false)->comment('This tells of job is still active or on active');
            $table->string('title')->comment('Job Posted Title');
            $table->string('description')->comment('Job Posted Description');
            $table->unsignedInteger('worktype_id')->comment('Student preffred work type ID');
            $table->string('salary')->comment('indicates job salaray');
            $table->dateTime('end_date')->comment('Job Posted End Date');
            $table->timestamps();


            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portaljobs');
    }
}
