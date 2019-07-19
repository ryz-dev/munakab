<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Opd;

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

        $opd = $opd->where('slug', $slug);
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
}
