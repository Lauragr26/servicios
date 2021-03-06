<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrador'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
