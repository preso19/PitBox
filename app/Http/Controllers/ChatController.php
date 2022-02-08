<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;
use App\Http\Requests\MessageRequest;

class ChatController extends Controller
{
    public function update(MessageRequest $request, $chatID) {
        $message = $request->all();

        $messageModel = Message::create([
            'body' => $message['body']
        ]);

        $sender = User::findOrFail($message['sender_id']);
        $messageModel->sender()->associate($sender);

        $chat = Chat::findOrFail($chatID);
        $messageModel->chat()->associate($chat);

        broadcast(new MessageSent($sender, $message['body']))->toOthers();

        $messageModel->save();
    }
}
