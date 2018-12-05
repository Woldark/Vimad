<?php

namespace App\Http\Controllers\Admin;

use App\C_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = C_category::get();
        return view('Admin.categories', compact('categories'));
    }

    public function show($id)
    {
        $category = C_category::where("id", $id)->firstOrFail();

        return view('Admin.category', compact('category'));
    }

    public function create()
    {
        return view('Admin.category_create');
    }

    public function edit($id)
    {
        $category = C_category::find($id);
        return view('Admin.category_edit', compact('category'));
    }

    public function post(Request $request)
    {

        $name = $request->get('name');

        $category = new C_category();

        $category->name = $name;
        $category->save();

        return redirect('management/categories');
    }

    public function save(Request $request)
    {
        $name = $request->get('name');
        $category = new C_category();
        $category->name = $name;
        $category->save();

        toast('دسته بندی' . $name . 'اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::categories.index');

    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $category = C_category::find($id);
        $category->name = $name;
        $category->save();

        toast('دسته بندی' . $name . 'به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::categories.index');
    }

    public function delete($id)
    {
        try {
            $category = C_category::find($id);
            $category->delete();
            toast('دسته بندی' . $category->name . 'حذف شد', 'success', 'bottom-right');
            return redirect()->route('admin::categories.index');
        } catch (\Exception $exception) {
            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('admin::categories.index');
        }
    }

}