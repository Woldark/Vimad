<?php

namespace App\Http\Controllers\API;

use App\C_content;
use App\Http\Controllers\Controller;

class C_contentController extends Controller
{
    public function index()
    {
        $c_contents = C_content::all();

        return response()->json([
            'error' => false,
            'c_contents' => $c_contents
        ], 200);
    }

    public function show($c_content)
    {
        $c_content = C_content::find($c_content);

        return response()->json([
            'error' => false,
            'c_content' => $c_content
        ], 200);
    }
}
