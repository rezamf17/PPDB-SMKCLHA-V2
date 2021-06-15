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
            'name' => 'Reza M Fauzi',
            'email' => 'rezayuyara@gmail.com',
            'role' => 1,
            'password' => Hash::make('reza1234')
        ],
        [
            'name' => 'Aldebaran',
            'email' => 'aldebaran@gmail.com',
            'role' => 2,
            'password' => Hash::make('12345678')
        ]);
    }
}
