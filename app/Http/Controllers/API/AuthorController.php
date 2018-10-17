<?php

namespace App\Http\Controllers\API;

use App\Author;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'error' => false,
            'authors' => $authors
        ], 200);
    }

    public function show($author)
    {
        $author = Author::find($author);

        return response()->json([
            'error' => false,
            'author' => $author
        ], 200);
    }
}
