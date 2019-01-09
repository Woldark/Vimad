<?php

namespace App\Http\Controllers\Admin;

use App\Field;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    private $user_path;

    public function __construct()
    {
        $this->user_path = public_path('/images/field');
        $this->makeDirectories();
    }

    public function index()
    {
        $fields = Field::get();
        return view('Admin.fields', compact('fields'));
    }

    public function create()
    {
        return view('Admin.field_create');
    }

    public function save(Request $request)
    {
        $name = $request->get('name');

        $field = new Field();


        $field->name = $name;


        $field->save();
        if (Input::hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = 'F_' . $field->id . '.' . $image->getClientOriginalExtension();
            $image->move($this->user_path, $input['imagename']);
            $field->image = $input['imagename'];
            $field->save();
        }

        toast('زمینه ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('Admin::fields.index');
    }

    public function edit($id)
    {
        $field = Field::find($id);
        return view('Admin.field_edit', compact('field'));
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');

        $field = Field::find($id);
        $field->name = $name;
        $field->save();

        toast('زمینه ' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('Admin::fields.index');
    }

    public function delete($id)
    {
        try {
            $field = Field::find($id);
            $field->delete();
        } catch (\Exception $exception) {
            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('Admin::fields.index');

        }
    }

    private function makeDirectories()
    {
        if (!is_dir($this->user_path)) {
            mkdir($this->user_path, 0777, true);
        }
        chmod($this->user_path, 0777);
    }
}
