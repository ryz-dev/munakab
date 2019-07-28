<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{

    public function index()
    {
        $slider = new Slider();
        $slider = $slider->all()->map(function($value){
            return [
                'title' => $value->title,
                'deskripsi' => $value->description,
                'image' => asset($value->image),
                'link' => $value->link
            ];
        });

        return apiResponse(200,$slider->toArray());
    }
}
