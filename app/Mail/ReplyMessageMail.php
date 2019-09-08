<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messaging;
    public $balasan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messaging, $balasan)
    {
        $this->messaging = $messaging;
        $this->balasan = $balasan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $messaging = $this->messaging;

        return $this->to($messaging->email)->subject('Pemerintah Kabupaten Muna')->view('messaging.reply-mail');
    }
}
