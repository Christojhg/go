<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insert([
            'id'=>1,
            'nombre'=>"Udemy",
            'descripcion'=>"descripcion Udemy",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('empresa')->insert([
            'id'=>2,
            'nombre'=>"EdTeam",
            'descripcion'=>"descripcion EdTeam",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('empresa')->insert([
            'id'=>3,
            'nombre'=>"Platzy",
            'descripcion'=>"descripcion Platzy",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('empresa')->insert([
            'id'=>4,
            'nombre'=>"crehana",
            'descripcion'=>"descripcion creana",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('empresa')->insert([
            'id'=>5,
            'nombre'=>"megacursos",
            'descripcion'=>"descripcion megacursos",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('empresa')->insert([
            'id'=>6,
            'nombre'=>"styde",
            'descripcion'=>"descripcion styde",
            'imagen' => "empresa.png",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);
    }
}
