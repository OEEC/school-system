<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Director',
            'email' => 'director@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maestro',
            'email' => 'maestro@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rogelio Perez',
            'email' => 'rp@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
