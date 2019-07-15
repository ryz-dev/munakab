<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuController extends Controller
{
    public function index($type){
        $menus = Menu::where('name', $type)->with(['parent_items.children' => function ($q) {
            $q->orderBy('order');
        }])->get()->toArray() ;


        return $menus;
    }
}
