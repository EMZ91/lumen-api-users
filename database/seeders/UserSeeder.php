<?php

namespace Database\Seeders;

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

        User::create([
            'id' => 1,
            'name' => 'Islam Zedan',
            'email' => 'islam@zedan.com',
            'password' => Hash::make(123456789)
        ]);

    }
}
