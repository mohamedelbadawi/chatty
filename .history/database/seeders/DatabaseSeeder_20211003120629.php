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
            'name'=>'',
            'email'=>'',
            'email_verified_at'=>'',
            'password'=>'',

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
