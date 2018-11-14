<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbWebservice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_WEBSERVICE', function (Blueprint $table) {
            $table->increments('webservice_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
            ->references('company_id')->on('TB_COMPANY')
            ->onDelete('cascade');
            $table->string('service_name',100);
            $table->string('alias',100);
            $table->string('URL',200);
            $table->string('description',1000);
            $table->text('header_row');
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
        Schema::dropIfExists('TB_WEBSERVICE');
    }
}