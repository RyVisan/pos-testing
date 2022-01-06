<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'visan',
            'email' => 'visan@gmail.com',
            'password' => bcrypt('password'),
            // 'password' => '$2a$12$ZAm7aZzRrpYMMuGL8oH2rOcn23h0Pid4o0XiiJP1UoYcNthr7Zse6',
        ]);
    }
}
