<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;

class PostController extends Controller
{

    protected $perPage = 10;


    public function index(Request $request)
    {
        $post = app()->make(Voyager::modelClass('Post'));
        // if ($request->has('category')) {
        //     $post->where('')
        // }
        $post = $post->published()->orderBy('created_at','DESC')->paginate($this->perPage);

        $post->getCollection()->transform(function($value){
            $value['author'] = \DB::table('users')->where('id', $value->author_id)->first()->name;
            $value['image'] = asset($value->image);
            $category = \DB::table('categories')->where('id', $value['category_id']);
            $value['category'] = $category->first()?$category->first()->name:null;
            unset($value['author_id']);
            unset($value['id']);
            unset($value['category_id']);
            return $value;
        });

        return apiResponse(200,$post);
    }

    public function category(Request $request)
    {
        $post = app()->make(Voyager::modelClass('Post'));
        $category = $request->category;

        $limit = $request->has('limit')?$request->limit:$this->perPage;

        $category_id = \DB::table('categories')->where('name', $category);

        if ($category_id->first()) {
            $post = $post->where('category_id', $category_id->first()->id)
                ->published()
                ->orderBy('created_at','DESC')
                ->paginate($limit)
                ->withPath(route('api.post.category').'?category='.$category);

            $post->getCollection()->transform(function($value) use ($category) {
                $value['author'] = \DB::table('users')->where('id', $value->author_id)->first()->name;
                $value['image'] = asset($value->image);
                $value['category'] = $category;
                unset($value['author_id']);
                unset($value['id']);
                unset($value['category_id']);
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
            // dd($post['category_id']);
            $category = \DB::table('categories')->where('id', $post['category_id']);
            $post['category'] = $category->first()?$category->first()->name:null;
            unset($post['author_id']);
            unset($post['id']);
            unset($post['category_id']);
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
                $category = \DB::table('categories')->where('id', $value['category_id']);
                $value['category'] = $category->first()?$category->first()->name:null;
                unset($value['author_id']);
                unset($value['id']);
                unset($value['category_id']);
                return $value;
            });


            return apiResponse(200, $related);
        }
        else{
            return apiResponse(404,false,'Post tidak ditemukan');
        }
    }

    public function featured()
    {
        $post = app()->make(Voyager::modelClass('Post'));

        $post = $post->published()
                    ->where('featured', '=',true)
                    ->take(3)
                    ->orderBy('created_at','DESC')
                    ->get()->map(function($value){
                        $value['image'] = asset($value['image']);
                        $value['author'] = \DB::table('users')->where('id', $value['author_id'])->first()->name;
                        $category = \DB::table('categories')->where('id', $value['category_id']);
                        $value['category'] = $category->first()?$category->first()->name:null;
                        unset($value['author_id']);
                        unset($value['id']);
                        unset($value['category_id']);
                        return $value;
                    });
        return apiResponse(200,$post);
    }
}
