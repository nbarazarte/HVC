<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('str_ci_pasaporte')->nullable();;
            $table->string('str_telefono')->nullable();;
            $table->string('str_genero')->nullable();;
            $table->string('customer_id')->nullable();
            $table->integer('lng_idpais')->nullable();;
            $table->binary('blb_img')->nullable();//Cambiarlo a longblob en mysql si lo quiero usar
            $table->string('gender')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->nullable();            
            $table->rememberToken();
            $table->timestamps();

        //Strip fields
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();

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
