<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengumuman;

class PengumumanController extends Controller
{
    protected $perPage = 10;

    public function index(Request $request)
    {
        $limit = $request->has('limit')?$request->limit:$this->perPage;

        $pengumuman = new Pengumuman();

        $pengumuman = $pengumuman->orderBy('created_at', 'DESC')
                                ->paginate($limit);
        $pengumuman->getCollection()->transform(function($value){
            $value['image'] = asset('storage/'.$value['image']);
            $value['author'] = \DB::table('users')->where('id', $value->user_id)->first()->name;
            unset($value['user_id']);
            unset($value['updated_at']);
            return $value;
        });

        return apiResponse(200, $pengumuman);
    }

    public function read($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        $pengumuman->image = asset('storage/'.$pengumuman->image);

        return apiResponse(200,$pengumuman);
    }
}
