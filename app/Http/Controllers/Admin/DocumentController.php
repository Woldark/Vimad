<?php

namespace App\Http\Controllers;

use App\A_content;
use App\Libraries\JDF;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = A_content::get();
        return view('admin.documents', compact('documents'));
    }

    public function create()
    {
        return view('admin.document_create');
    }

    public function save(Request $request)
    {
        $name = $request->get('name');
        $document = new A_content();


        $document->name = $name;


        $document->save();
        toast('سند ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::documents.index');
    }

    public function edit($id)
    {
        $document = A_content::find($id);
        return view('admin.document_edit', compact('document'));
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $document = A_content::find($id);
        $document->name = $name;

        $document->save();

        toast('سند' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::documents.index');

    }

    public function delete($id)
    {
        try {

            $document = A_content::find($id);
            $document->delete();

            toast('سند ' . $document->name . ' حذف شد', 'success', 'bottom-right');

            return redirect()->route('admin::documents.index');

        } catch (\Exception $exception) {
            toast('مشکلی پیش آمده است', 'error', 'bottom-right');

            return redirect()->route('admin::documents.index');
        }
    }
}
