<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('imagen');
            $table->string('escuelas')->nullable();
            $table->string('laboral',500)->nullable();
            $table->timestamps();
        });

        DB::table('areas')->insert([
                'nombre' => 'Arte y Creatividad',
                'imagen' => '1.jpg',
            ]
        );

        DB::table('areas')->insert([
                'nombre' => 'Ciencias Sociales',
                'imagen' => '2.jpg',
            ]
        );

        DB::table('areas')->insert([
                'nombre' => 'Económica, Administrativa y Financiera',
                'imagen' => '3.jpg',
            ]
        );

        DB::table('areas')->insert([
                'nombre' => 'Ciencia y Tecnología',
                'imagen' => '4.jpg',
            ]
        );

        DB::table('areas')->insert([
                'nombre' => 'Ciencias Ecológicas, Biológicas y de Salud',
                'imagen' => '5.jpg',
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
        Schema::dropIfExists('areas');
    }
}
