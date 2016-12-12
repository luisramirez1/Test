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
            $table->bigInteger('tel');
            $table->integer('tipoUsuario');
            $table->string('imagen')->nullable();
            $table->boolean('verified')->default(false);
            $table->boolean('verifiedLogin')->default(false);
            $table->string('token')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
                'name' => 'Luis Fernando Ramirez Salazar',
                'email' => 'luisramirez.lfrs@gmail.com',
                'password' => bcrypt('luis123'),
                'tipoUsuario' => '1',
                'verified' => '1',
                'tel' => '6672005057',
            ]
        );
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
