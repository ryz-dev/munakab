<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $table = 'messaging';
    protected $fillable = ['fullname', 'phone', 'email', 'subject', 'message', 'read_status', 'type'];
}
