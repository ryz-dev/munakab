<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return '';
    }

    public function category(Request $request)
    {
        dd($request);
    }

    public function read(Request $request)
    {
        dd($request);
    }
}
