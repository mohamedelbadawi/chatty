<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'’Mohamed Reda',
            'email'=>'Mohamed@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('123456789'),

        ]);
        User::create([
            'name'=>'’Ahmed',
            'email'=>'Ahmed@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('123456789'),

        ]);
        User::create([
            'name'=>'’Mahmoud',
            'email'=>'Mahmoud@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('123456789'),

        ]);
        User::create([
            'name'=>'’Wahed',
            'email'=>'wahed@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('123456789'),

        ]);
        Conversation::create(
            [
                'name'=>'',
                'uuid'=>'',
                'user_id'=>'',

            ]
        );
    }
}
