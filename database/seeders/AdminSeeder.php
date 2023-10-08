<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname'  => 'Mohammad Noval Rafly Bramastya',
            'nik'       => '3114422113414263',
            'password'  => bcrypt('admin'),
            'isAdmin'   => 1
        ]);
    }
}
