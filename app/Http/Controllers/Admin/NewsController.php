<?php

namespace App\Http\Controllers;

use App\Libraries\JDF;
use App\N_content;
use Hatamiarash7\JDF\Generator;
use Zend\Diactoros\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newses = N_content::get();

        return view('admin.newses', compact('newses'));
    }

    public function create()
    {
        return view('admin.news_create');
    }

    public function save(Request $request)
    {
        $name = $request->get('name');
        $news = new N_content();
        $jdf = new Generator();

        $news->name = $name;
        $news->create_date = $jdf->getTimestamp();

        $news->save();

        toast('خبر ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::news.index');
    }

    public function edit($id)
    {
        $news = N_content::find($id);
        return view('admin.news_edit', compact('news'));
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $news = N_content::find($id);
        $news->name = $name;
        $news->save();

        toast('خبر' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::news.index');
    }

    public function delete($id)
    {
        try {

            $news = N_content::find($id);
            $news->delete();

            toast('خبر ' . $news->name . ' حذف شد', 'success', 'bottom-right');
            return redirect()->route('admin::news.index');

        } catch (\Exception $exception) {

            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('admin::news.index');
        }
    }
}
