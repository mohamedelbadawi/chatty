<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        User::create(['name' => '’Mohamed Reda', 'email' => 'Mohamed@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789')]);
        User::create(['name' => '’Ahmed', 'email' => 'Ahmed@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789')]);
        User::create(['name' => '’Mahmoud', 'email' => 'Mahmoud@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789')]);
        User::create(['name' => '’Wahed', 'email' => 'wahed@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('123456789')]);
        Conversation::create(['name' => 'family', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        Conversation::create(['name' => 'friends', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        Conversation::create(['name' => 'work', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        Conversation::create(['name' => 'college', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        Conversation::create(['name' => 'gahwa', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        Conversation::create(['name' => 'gym', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        DB::insert(['conversation_id' => 1, 'user_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 1, 'user_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 1, 'user_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 1, 'user_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

        DB::insert(['conversation_id' => 2, 'user_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 2, 'user_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 3, 'user_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 3, 'user_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 3, 'user_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 4, 'user_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        DB::insert(['conversation_id' => 4, 'user_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
