<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'type' => 1,
            'name' => 'Director',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'type' => 2,
            'name' => 'Maestro',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'type' => 3,
            'name' => 'Alumno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
