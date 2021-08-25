<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('username',30)->unique();
            $table->string('cnic',20)->unique();
            $table->string('contact',20)->unique();
            $table->string('email',40)->unique();
            $table->string('password',100);
            $table->string('type',10);
            $table->string('country',20);
            $table->string('city',20);
            $table->string('address',255);
            $table->string('gender',10);
            $table->bigIncrements('user_id');
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
