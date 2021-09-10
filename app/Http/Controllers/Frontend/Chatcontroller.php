<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebUsers;
use Illuminate\Http\Request;

class Chatcontroller extends Controller
{
    public function index()
    {
        $this->data['users'] = WebUsers::where('web_user_id', '!=', session()->get('user_web_data')['user_info']['web_user_id'])->get();

        return view('frontend.chat', $this->data);
    }
}

