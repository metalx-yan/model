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
<<<<<<< HEAD
            $table->integer('roles_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
=======
            $table->rememberToken();
            $table->timestamps();
        });

         

>>>>>>> fca5c238a93b026788a29208bad70ef3df7ef5ee
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
        

>>>>>>> fca5c238a93b026788a29208bad70ef3df7ef5ee
        Schema::dropIfExists('users');
    }
}
