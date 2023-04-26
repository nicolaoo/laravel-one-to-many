<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        $new_user = User::create([
            'name' => 'Nicola',
            'password' => Hash::make('042348'),
            'email' => 'nicolaguarise00@gmail.com',
        ]);
    }
}
