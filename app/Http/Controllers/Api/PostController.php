<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // $post = app()->make(Voyager::modelClass('Post'));
        // if ($request->has('category')) {
        //     $post->where('')
        // }
        // dd($post->all()->toArray());
    }

    public function category(Request $request)
    {
        $post = app()->make(Voyager::modelClass('Post'));
        $category = $request->category;

        $category_id = \DB::table('categories')->where('name', $category);
        if ($category_id->first()) {
            $post = $post->where('category_id', $category_id->first()->id)->get();

            $post = $post->map(function($value, $key) use ($category) {
                $value['author'] = \DB::table('users')->where('id', $value->author_id)->first()->name;
                $value['image'] = asset($value->image);
                $value['category'] = $category;
                return $value;
            });

            return apiResponse(200,$post);
        }
        else{
            return apiResponse(404,false,'kategori tidak ditemukan');
        }
    }

    public function read(Request $request)
    {
        $post = app()->make(Voyager::modelClass('Post'));
        $slug = $request->slug;

        $post = $post->where('slug', $slug);

        if ($post->first()) {
            $post = $post->first()->toArray();
            $post['image'] = asset($post['image']);
            $post['author'] = \DB::table('users')->where('id', $post['author_id'])->first()->name;
            unset($post['author_id']);
            $category = \DB::table('categories')->where('id', $post['category_id']);
            $post['category'] = $category->first()?$category->first()->name:null;
            return apiResponse(200, $post);
        }
        else{
            return apiResponse(404,false,'Post tidak ditemukan');
        }
    }

    public function related(Request $request)
    {
        $post = app()->make(Voyager::modelClass('Post'));
        $slug = $request->slug;

        $post = $post->where('slug', $slug);

        if ($post->first()) {
            $post = $post->first()->toArray();
            $related = app()->make(Voyager::modelClass('Post'));

            $related = $related->where('category_id', $post['category_id'])->where('id','!=', $post['id'])->take(3)->get()->map(function($value){
                $value['image'] = asset($value['image']);
                $value['author'] = \DB::table('users')->where('id', $value['author_id'])->first()->name;
                unset($value['author_id']);
                $category = \DB::table('categories')->where('id', $value['category_id']);
                $value['category'] = $category->first()?$category->first()->name:null;
                return $value;
            });


            return apiResponse(200, $related);
        }
        else{
            return apiResponse(404,false,'Post tidak ditemukan');
        }
    }
}
