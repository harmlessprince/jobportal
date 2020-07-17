<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('LoginId of company that owns the account');
            $table->string('name');
            $table->string('phone_number');
            $table->string('website')->comment('Indicates the companies url');
            $table->unsignedInteger('industry_id')->comment('Id of this Company industry');
            $table->unsignedInteger('state_id')->comment('Id of the state the job is located');
            $table->string('logo')->comment('Indicates the companies logo');
            $table->string('headquarter')->comment('Address to the companies headquartre');
            $table->boolean('status')->default(false)->comment('This indicates if company is still active or on inactive');
            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('industry_id')->references('id')->on('allindustries');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
