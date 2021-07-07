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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('etf')->unique(); 
            $table->string('nid')->nullable();
            $table->string('is_active');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('department'); 
            $table->string('photo')->nullable();
            $table->string('joining_date'); 
            $table->string('uType')->default('usr')->comment('Adm for admin Usr for user');
            $table->string('password');
            $table->rememberToken();
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
