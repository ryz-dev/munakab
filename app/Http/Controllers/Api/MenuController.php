<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Facades\Voyager;

use App\Opd;

class MenuController extends Controller
{
    public function index($type){
        $menus = Menu::where('name', $type)->with(['parent_items.children' => function ($q) {
            $q->orderBy('order');
        }])->first();


        $menus->parent_items->map(function($value){
            if ($value->children->count()) {
                $value->children->map(function($value){

                    if ($value->route == 'api.opd.category') {
                        $opd = new Opd();
                        $category = app()->make(Voyager::modelClass('Category'));

                        $value->list = $opd->where('category_id', $category->where('name', $value->parameters->category)->first()->id)->get()->map(function($value){
                            return [
                                'title' => $value->title,
                                'url' => route('api.opd.read',['slug' => $value->slug])
                            ];
                        });
                        return $value;
                    }

                    if ($value->route && $value->url =="") {
                        // dd($value->parameters);
                        $value->url = $this->customUrl($value->route, $value->parameters);

                        return $value;
                    }

                });
            }
        });

        $menus = $menus->parent_items->sortBy('order')->values()->toArray();
        return apiResponse(200, $menus);
    }

    public function customUrl($route,$parameters){
        if ($parameters) {
            return route($route,(array) $parameters);
        }
        return route($route,$parameters);
    }
}
