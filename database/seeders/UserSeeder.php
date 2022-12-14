<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->count(5)
        ->create([
            'password' => Hash::make('soalegria'),

        ]);

        //Usuario mateus

        DB::table('users')->insert([
            'name' => 'Mateus Moraes',
            'email' => 'mmoraes.analista@gmail.com',
            'password' => Hash::make('soalegria'),
        ]);
    }
}
