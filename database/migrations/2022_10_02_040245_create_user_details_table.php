<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
           
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('NameSei')->nullable();
            $table->string('NameMei')->nullable();
            $table->string('NameSeiKana')->nullable();
            $table->string('NameMeiKana')->nullable();
            $table->integer('birthdayY')->nullable();
            $table->integer('birthdayM')->nullable();
            $table->integer('birthdayD')->nullable();
            $table->string('sex')->nullable();
            $table->integer('zip')->nullable();
            $table->string('pref')->nullable();
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->string('addr3')->nullable();
            $table->string('addr4')->nullable();


            
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
        Schema::dropIfExists('userdetails');
    }
}
