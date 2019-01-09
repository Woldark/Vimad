<?php

namespace App\Http\Controllers;

use App\C_content;
use Zend\Diactoros\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = C_content::get();
        return view('admin.contents', compact('contents'));
    }

    public function create()
    {
        return view('admin.content_create');
    }

    public function save(Request $request)
    {
        $content = $request->get('name');

        $content = new C_content();
        $content->name = $name;
        $content->save();

        toast('محتوا ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::contents.index');
    }

    public function edit($id)
    {
        $content = C_content::find($id);
        return view('admin.content_edit', compact('content'));

    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $content = C_content::find($id);
        $content->name = $name;

        $content->save();

        toast('محتوا' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::contents.index');

    }

    public function delete($id)
    {
        try {
            $content = C_content::find($id);
            $content->delete();

            toast('محتوا ' . $content->name . ' حذف شد', 'success', 'bottom-right');
            return redirect()->route('admin::contents.index');

        } catch (\Exception $exception) {

            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('admin::contents.index');
        }

    }
}
