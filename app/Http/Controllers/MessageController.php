<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\PrivateMessageEvent;

class MessageController extends Controller
{
    public function conversation($userId){
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $friendInfo = User::find($userId);
        $myInfo = User::find(Auth::id());

        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['userId'] = $userId;

        return view('message.conversation', $this->data);
    }

    public function sendMessage(Request $request){
        $request->validate([
           'message' => 'required',
           'receiver_id' => 'required'
        ]);

        $senderId = Auth::id();
        $receiverId = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;

        if($message->save()){
            try{
                $message->users()->attach($senderId, ['receiver_id' => $receiverId]);
                $sender = User::find($senderId);

                $data = [];
                $data['sender_id'] = $senderId;
                $data['sender_name'] = $sender->name;
                $data['receiver_id'] = $receiverId;
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;

                event(new PrivateMessageEvent($data));

                return response()->json([
                    'data' => $data,
                    'success' => true,
                    'message' => 'Message Sent Successfully'
                ]);
            } catch (\Exception $e){
                $message->delete();
            }
        }
    }
}
