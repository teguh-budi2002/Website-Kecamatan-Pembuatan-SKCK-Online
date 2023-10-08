<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname'  => 'Mujib Suyono Putro',
            'nik'       => '3114422113414143',
            'password'  => bcrypt('user1')
        ]);

        User::create([
            'fullname'  => 'Andrian Angga Aji',
            'nik'       => '3114422113411333',
            'password'  => bcrypt('user2')
        ]);

        User::create([
            'fullname'  => 'Citra Putri Khatulistiwa',
            'nik'       => '3114422113567143',
            'password'  => bcrypt('user3')
        ]);
    }
}
