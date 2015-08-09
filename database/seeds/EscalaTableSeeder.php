<?php

use Illuminate\Database\Seeder;

class EscalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escalas')->insert([
            'data_escala' => new DateTime('2015-08-06'),
            'ministro' => 'Pr. Edison',
          ]);

        DB::table('escalas')->insert([
            'data_escala' => new DateTime('2015-08-07'),
            'ministro' => 'Anderson Amaral',
          ]);
    }
}
