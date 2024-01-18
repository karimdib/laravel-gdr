<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_user = new User();
        $new_user->name = 'user';
        $new_user->email = 'user@mail.com';
        $new_user->password = 'password';
        $new_user->save();
    }
}
