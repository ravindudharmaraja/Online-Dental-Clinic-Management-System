<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            
            'uname' => 'Admin',
            'role' => 1,
            'name' => 'adones',
            'phone' => 'Admin',
            'password' => bcrypt('admin123'),
            'remember_token' => str_random(10),
            'created_at' => new DATETIME(),
            'updated_at' => new DATETIME(),


        ]);
    }
}
