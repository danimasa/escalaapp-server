<?php

use Illuminate\Database\Seeder;

class BackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Backs Table
        DB::table('backs')->insert([
          'nome' => 'Camila'
          ]);

        DB::table('backs')->insert([
          'nome' => 'Maisa'
          ]);

        DB::table('backs')->insert([
          'nome' => 'Weber'
          ]);

        DB::table('backs')->insert([
          'nome' => 'Denise'
          ]);

        DB::table('backs')->insert([
          'nome' => 'Thais'
          ]);

        // back_escala Table
        DB::table('back_escala')->insert([
          'escala_id' => 1,
          'back_id' => 1
          ]);

        DB::table('back_escala')->insert([
          'escala_id' => 1,
          'back_id' => 3
          ]);

        DB::table('back_escala')->insert([
          'escala_id' => 1,
          'back_id' => 4
          ]);

        DB::table('back_escala')->insert([
          'escala_id' => 2,
          'back_id' => 2
          ]);
          
        DB::table('back_escala')->insert([
          'escala_id' => 2,
          'back_id' => 5
          ]);

    }
}
