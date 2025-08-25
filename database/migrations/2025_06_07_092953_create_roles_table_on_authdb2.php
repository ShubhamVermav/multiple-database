<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTableOnAuthdb2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        if (!Schema::connection('authdb2')->hasTable('roles')) {
            Schema::connection('authdb2')->create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('role_type');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('authdb2')->dropIfExists('roles');
    }
}
