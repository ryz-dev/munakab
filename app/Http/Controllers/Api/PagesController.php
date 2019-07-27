<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;

class PagesController extends Controller
{

    public function read(Request $request)
    {
        $pages = app()->make(Voyager::modelClass('Page'));
        $slug = $request->slug;

        $pages = $pages->where('slug', $slug);

        if ($pages->first()) {
            $pages = $pages->first()->toArray();
            $author = \DB::table('users')->where('id', $pages['author_id'])->first()->name;
            unset($pages['author_id']);
            $pages['author'] = $author;
            $pages['image'] = asset($pages['image']);
            return apiResponse(200,$pages);
        }
        else{
            return apiResponse(404,false);
        }
    }

    public function tentang()
    {
        $pages = app()->make(Voyager::modelClass('Page'));
        $pages = $pages->where('slug','=','tentang');
        if ($pages->first()) {
            $pages = $pages->first()->toArray();
            unset($pages['id']);
            unset($pages['author_id']);
            unset($pages['status']);
            $pages['image'] = asset($pages['image']);
            return apiResponse(200, $pages);
        }
        else{
            return apiResponse(200,null,'Page tentang tidak ditemukan');
        }
    }
}
