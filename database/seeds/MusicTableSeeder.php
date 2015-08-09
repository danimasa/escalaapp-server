<?php

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('musics')->insert([
          'nome' => 'Poderoso Deus',
          'author' => 'David Quilan',
          'tom' => 'G',
          'link' => 'https://www.youtube.com/watch?v=6DRg674Q9T0',
          ]);

        DB::table('musics')->insert([
          'nome' => 'Todo Poderoso Deus',
          'author' => 'Marquinhos Gomes',
          'tom' => 'D',
          'link' => 'https://www.youtube.com/watch?v=QF_cDeQdRqU',
          ]);

        DB::table('musics')->insert([
          'nome' => 'Deus do Impossível',
          'author' => 'Toque no Altar',
          'tom' => 'Bb',
          'link' => 'https://www.youtube.com/watch?v=wF1RZ6glJ4I',
          ]);

        DB::table('escala_music')->insert([
          'escala_id' => 1,
          'music_id' => 1
          ]);

        DB::table('escala_music')->insert([
          'escala_id' => 1,
          'music_id' => 3
          ]);

        DB::table('escala_music')->insert([
          'escala_id' => 2,
          'music_id' => 2
          ]);

    }
}
