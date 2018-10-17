<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\N_content;

class N_contentController extends Controller
{
    public function index()
    {
        $n_contents = N_content::all();

        return response()->json([
            'error' => false,
            'n_contents' => $n_contents
        ], 200);
    }

    public function show($n_content)
    {
        $n_content = N_content::find($n_content);

        return response()->json([
            'error' => false,
            'n_content' => $n_content
        ], 200);
    }
}
