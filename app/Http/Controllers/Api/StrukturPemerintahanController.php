<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StrukturPemerintahan;

class StrukturPemerintahanController extends Controller
{
    public function index()
    {
        $struktur = new StrukturPemerintahan();

        $struktur = $struktur->whereNull('atasan')->with(['bawahan' => function($q){
            return $q->orderBy('urutan');
        }])->first();


        $struktur->bawahan->map(function($value){
            $value['image'] = asset('storage/'.$value['image']);
            return $value;
        });

        $struktur->image = asset($struktur['image']);

        return apiResponse(200, $struktur);
    }
}
