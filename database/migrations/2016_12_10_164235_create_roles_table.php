<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('display_name');
            $table->timestamps();
            $table->unsignedInteger('role_id');

        });

        Schema::table('roles', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign('roles_role_id_foreign');
        });

        Schema::dropIfExists('roles');
    }
}
