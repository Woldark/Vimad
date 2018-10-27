<?php

namespace App\Http\Controllers\API;

use App\A_content;
use App\Http\Controllers\Controller;

class A_contentController extends Controller
{
    public function index()
    {
        $a_contents = A_content::all();

        return response()->json([
            'error' => false,
            'a_contents' => $a_contents
        ], 200);
    }

    public function show($a_content)
    {
        $a_content = A_content::find($a_content);

        return response()->json([
            'error' => false,
            'a_content' => $a_content
        ], 200);
    }
}
