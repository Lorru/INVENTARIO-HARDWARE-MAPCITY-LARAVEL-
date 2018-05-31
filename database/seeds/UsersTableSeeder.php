<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = User::create([
            'name' => 'Diego',
            'email' => 'elpipediego@gmail.com',
            'password' => '123'
        ]);
    }
}
