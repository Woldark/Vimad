<?php

namespace App\Http\Controllers\API;

use App\Field;
use App\Http\Controllers\Controller;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();

        return response()->json([
            'error' => false,
            'fields' => $fields
        ], 200);

    }

    public function show($field)
    {
        $field = Field::find($field);

        return response()->json([
            'error' => false,
            'field' => $field
        ], 200);
    }
}
