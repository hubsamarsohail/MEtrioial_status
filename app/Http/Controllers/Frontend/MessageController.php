<?php

namespace App\Http\Controllers\Frontend;

use App\Events\PrivateMessageEvent;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\WebUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function conversation($userId){
        $users = WebUsers::where('web_user_id', '!=', session()->get('user_web_data')['user_info']['web_user_id'])->get();
        $friendInfo = WebUsers::find($userId);
        $myInfo = WebUsers::find(session()->get('user_web_data')['user_info']['web_user_id']);
        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['userId'] = $userId;

        return view('frontend.message.conversation', $this->data);
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
