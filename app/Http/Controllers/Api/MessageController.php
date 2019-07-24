<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return '';
    }

    public function pengaduan(Request $request)
    {
        // dd($request->all());
        $message = new Message();
        $message->type = 'pengaduan';
        $message->fullname = $request->informer_name;
        $message->phone = $request->informer_phone;
        $message->email = $request->informer_email;
        $message->subject = $request->subject;
        $message->message = $this->templatePengaduan($request);
        $message->read_status = false;

        $message->save();

        return apiResponse(200, null, 'Terima kasih, laporan anda telah kami terima dan akan kami proses lebih lanjut');
    }

    public function saran(Request $request)
    {
        $message = new Message();
        $message->type = 'saran';
        $message->fullname = $request->nama_lengkap;
        $message->subject = 'saran';
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->read_status = false;

        $message->save();

        return apiResponse(200,null,'Terima kasih atas saran yang anda masukkan');
    }

    private function templatePengaduan($data){
        $message = '';
        $message= 'Saya '. $data->informer_name.' dengan ini mengadukan '.$data->suspect_name.', yang berjabatan '.$data->suspect_department.' dari satuan kerja '.$data->suspect_division.', karena '.$data->complaint;

        return $message;
    }
}
