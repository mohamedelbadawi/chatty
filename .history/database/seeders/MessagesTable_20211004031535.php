<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Message;
use Carbon\Factory;
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
        $faker = Factory::create();

        for ($s = 1; $s <= 5; $s++) {
            $conversation = Conversation::whereId($s)->with('Users')->first();
            for ($i = 1; $i <= 5; $i++){
                Message::create([
                    'conversation_id'=>$conversation->id,
                    'user_id'=>$conversation->Users->random()->id,
                    'body'->sentence(4),
                ]);
            }
        }
    }
}
