<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function update(Request $request) {
        $data = $request->all();

        $sender = User::findOrFail($data['user_id']);

        if (count($data['chat']['messages']) > 0) {
            foreach ($data['chat']['messages'] as $message) {
                if (!isset($message['id'])) {
                    $message = Message::create([
                        'body' => $message['body']
                    ]);

                    $message->sender()->associate($sender);

                    $chat = Chat::findOrFail($data['chat']['id']);
                    $message->chat()->associate($chat);

                    $message->save();
                }
            }
        }
    }
}
