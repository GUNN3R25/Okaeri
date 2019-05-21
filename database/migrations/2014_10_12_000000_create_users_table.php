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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->string('password');
            $table->string('phone');
            $table->string('address',200);
            $table->integer('type');
            $table->string('ImagenPortada',200);
            $table->string('ImagenAvatar',200);
=======
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
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
        Schema::dropIfExists('users');
    }
}
