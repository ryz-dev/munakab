<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ReplyMessageMail;
use App\Message;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

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

    public function reply(Request $request)
    {
        Config::set('mail.username', setting('admin.email_address'));
        Config::set('mail.password', setting('admin.password_email'));
        Config::set('mail.host', setting('admin.email_host'));
        Config::set('mail.port', setting('admin.email_port'));
        Config::set('mail.from.name', setting('admin.email_sender'));
        Config::set('mail.encryption', setting('admin.email_encryption'));
        $message = Message::find((int)$request->id_messaging);

        Mail::send(new ReplyMessageMail($message, $request->reply)) ;
        return apiResponse(200,$message);
    }
}
