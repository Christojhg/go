<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'id'=>1,
            'nombre'=>"Programacion web",
            'descripcion'=>"Programacion web",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('categoria')->insert([
            'id'=>2,
            'nombre'=>"Negocios",
            'descripcion'=>"Negocios",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('categoria')->insert([
            'id'=>3,
            'nombre'=>"Idiomas",
            'descripcion'=>"Idiomas",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('categoria')->insert([
            'id'=>4,
            'nombre'=>"Programacion Escritorio",
            'descripcion'=>"Programacion Escritorio",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('categoria')->insert([
            'id'=>5,
            'nombre'=>"Programacion Movil",
            'descripcion'=>"Programacion Movil",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);

        DB::table('categoria')->insert([
            'id'=>6,
            'nombre'=>"Otros",
            'descripcion'=>"Otros",
            'estado'=>1,
            'created_at' => date('2019-12-01 00:00:00'),
            'updated_at' => date('2019-12-01 00:00:00')
        ]);
    }
}
