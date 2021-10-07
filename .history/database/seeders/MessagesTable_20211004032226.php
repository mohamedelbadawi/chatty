<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Message;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class MessagesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        for ($s = 1; $s <= 4; $s++) {
            $conversation = Conversation::whereId($s)->with('Users')->first();
            for ($i = 1; $i <= 4; $i++) {
                Message::create([
                    'conversation_id' => $conversation->id,
                    'user_id' => $conversation->Users->random()->id,
                    'body' => $faker->sentence(4),
                ]);
                Conversation::whereId($s)->update(['last_message_at' => now()]);
            }
        }
    }
}
