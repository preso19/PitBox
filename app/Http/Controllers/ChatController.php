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

        if (count($data['chat']['messages']) > 0) {
            foreach ($data['chat']['messages'] as $message) {
                if (!isset($message['id']) && !isset($message['saved'])) {
                    $messageModel = Message::create([
                        'body' => $message['body']
                    ]);

                    $sender = User::findOrFail($message['sender_id']);
                    $messageModel->sender()->associate($sender);

                    $chat = Chat::findOrFail($data['chat']['id']);
                    $messageModel->chat()->associate($chat);

                    $messageModel->save();
                }
            }
        }
    }
}
