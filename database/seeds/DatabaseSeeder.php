<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'akon',
            'email' => 'akon@gmail.com',
            'password' => bcrypt('123456'),
            'username' => 'akon',
            'phone' => '123456'
        ]);
    }
}
