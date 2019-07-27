<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StrukturPemerintahan extends Model
{
    protected $table = 'struktur_pemerintahan';
    public $timestamps = false;

    public function bawahan()
    {
        return $this->hasMany('App\StrukturPemerintahan','atasan')->with('bawahan');
    }
}
