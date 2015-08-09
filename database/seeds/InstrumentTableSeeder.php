<?php

use Illuminate\Database\Seeder;

class InstrumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('instrumentals')->insert([
            'funcao' => 'Teclado',
            'nome' => 'Daniel'
          ]);

        DB::table('instrumentals')->insert([
            'funcao' => 'Guitarra',
            'nome' => 'Tiel'
          ]);

        DB::table('instrumentals')->insert([
            'funcao' => 'Teclado',
            'nome' => 'Vinícius'
          ]);

        DB::table('instrumentals')->insert([
            'funcao' => 'Baixo',
            'nome' => 'Gibeon'
          ]);
    }
}
