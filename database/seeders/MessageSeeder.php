<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run()
    {
      for ($i = 0; $i < 5; $i++) {
        $message = new Message();
        $message->text = 'Messaggio di prova';
        $message->save();
      }
    }
}
