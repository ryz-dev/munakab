<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class MessagingController extends Controller
{
    public function index(){
        $message = Message::all();
        $pengaduan = $message->where('type', 'pengaduan')->sortBy('created_at')->sortBy('read_status');
        $saran = $message->where('type', 'saran');

        return view('messaging.index', compact('saran','pengaduan'));
    }

    public function read($id)
    {
        $message = Message::find($id);
        $message->read_status = true;

        $message->save();
        return redirect(route('admin.messaging'));
    }
}
