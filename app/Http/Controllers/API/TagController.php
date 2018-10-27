<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return response()->json([
            'error' => false,
            'tags' => $tags
        ]);
    }

    public function show($tag)
    {
        $tag = Tag:: find($tag);

        return response()->json([
            'error' => false,
            'tag' => $tag
        ]);
    }
}
