<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate')->nullable();;
            $table->enum('sex',['female','male']);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

         Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('observation')->nullable();
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->timestamps();
        });

          Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('observation')->nullable();
            $table->timestamps();
        });

          Schema::create('consultation_treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('observation')->nullable();
            $table->integer('treatment_id')->unsigned();
            $table->foreign('treatment_id')->references('id')->on('treatments');
            $table->integer('consultation_id')->unsigned();
            $table->foreign('consultation_id')->references('id')->on('consultations');
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
        //
        Schema::drop('users');
        Schema::drop('password_resets');
        Schema::dropIfExists('consultation_treatments');
        Schema::dropIfExists('treatments');
        Schema::dropIfExists('consultations');
        Schema::dropIfExists('patients');
    }
}
