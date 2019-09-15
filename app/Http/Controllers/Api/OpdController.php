<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Opd;
use TCG\Voyager\Models\Post;

class OpdController extends Controller
{

    public function index()
    {
        return '';
    }

    public function read(Request $request)
    {
        $opd = new Opd();
        $slug = $request->slug;

        $opd = $opd->where('slug', $slug)->where('status','=','PUBLISHED');
        if ($opd->first()) {
            $opd = $opd->first()->toArray();
            $opd['image'] = responseImage($opd['image']);
            $opd['author'] = getUserNameById($opd['author_id']);
            $opd['kepala_dinas'] = getUserNameById($opd['user_id']);
            $opd['kepala_dinas_image'] = getUserPictureById($opd['user_id']);
            return apiResponse(200, $opd);
        }
        else{
            return apiResponse(404,false);
        }
    }

    public function related(Request $request)
    {
        $slug = $request->slug;
        $opd = new Opd();
        $opd = $opd->where('slug', $slug)->where('status','=','PUBLISHED');

        if ($opd->first()) {
            $opd = $opd->first()->toArray();
            $opd['image'] = responseImage($opd['image']);
            $opd['author'] = getUserNameById($opd['author_id']);
            $opd['kepala_dinas'] = getUserNameById($opd['user_id']);
            $opd['kepala_dinas_image'] = getUserPictureById($opd['user_id']);

            $related = Post::where('author_id','=',$opd['user_opd'])
                            ->published()
                            ->orderBy('created_at','DESC')
                            ->take(3);

            if ($related->count() > 0) {
                $related = $related->get()->map(function($value){
                    $value['image'] = asset('storage/'.$value['image']);
                    $value['author'] = \DB::table('users')->where('id', $value['author_id'])->first()->name;
                    unset($value['author_id']);
                    unset($value['id']);
                    unset($value['category_id']);
                    $category = \DB::table('categories')->where('id', $value['category_id']);
                    $value['category'] = $category->first()?$category->first()->name:null;

                    return $value;
                });
                return apiResponse(200, $related);
            }
            else{
                return apiResponse(200, null,'Post tidak ditemukan');
            }

        }
        else{
            return apiResponse(404,false,'Opd tidak ditemukan');
        }
    }

}
