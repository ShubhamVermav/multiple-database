<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfoAuthbd2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::connection('authdb2')->create('user_infos', function (Blueprint $table) {
           $table->id();
            $table->unsignedBigInteger('mainuser_id'); // FK to users
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
            $table->foreign('mainuser_id')->references('id')->on('main_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
