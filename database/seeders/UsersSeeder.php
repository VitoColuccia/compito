<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$user = new User();
        $user->username = 'Pincopallino';
        $user->save();*/

        User::factory()->count(50)->create();
    }
}
