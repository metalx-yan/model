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
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('roles_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
=======
            $table->string('name')->nullable();
            $table->string('email')->unique();
<<<<<<< c64f2eb84f3484b8bb20b3acbf08110591d27f2a
            $table->string('password');
            $table->integer('roles_id')->unsigned();
=======
            $table->string('password')->nullable();
>>>>>>> "Registrasi dua tahap, view seadanya"
            $table->rememberToken();
            $table->timestamps();
        });
         
        

>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
=======
       

>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
        Schema::dropIfExists('users');
    }
}
