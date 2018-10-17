<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;

class MainController extends Controller
{
    public function indx(){
        $tas = Tag::all();

        return view('l',compact('tas'));
    }
}
