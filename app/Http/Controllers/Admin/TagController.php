<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('Admin.tags', compact('tags'));
    }

    public function create()
    {
        return view('');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('Admin.tag_edit', compact('tag'));
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $tag = Tag::find($id);
        $tag->name = $name;
        $tag->save();

        toast('تگ ' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::tags.index');
    }

    public function delete($id)
    {
        try {
            $tag = Tag::find($id);
            $tag->delete();

            toast('ساختمان ' . $tag->name . ' حذف شد', 'success', 'bottom-right');
            return redirect()->route('admin::tags.index');

        } catch (\Exception $exception) {
            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('admin::tags.index');
        }
    }
}
