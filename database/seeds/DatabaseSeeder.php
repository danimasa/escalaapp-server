<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(EscalaTableSeeder::class);
        $this->call(BackTableSeeder::class);
        $this->call(InstrumentTableSeeder::class);
        $this->call(MusicTableSeeder::class);

        Model::reguard();
    }
}
