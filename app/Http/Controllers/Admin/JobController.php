<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class JobController extends Controller
{
    private $user_path;

    public function __construct()
    {
        $this->user_path = public_path('/images/job');
        $this->makeDirectories();
    }

    public function index()
    {
        $jobs = Job::get();
        return view('admin.jobs', compact('jobs'));
    }

    public function create()
    {
        return view('admin.job_create');
    }

    public function save(Request $request)
    {
        $name = $request->get('name');

        $job = new Job();


        $job->name = $name;

        $job->save();

        if (Input::hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = 'J_' . $job->id . '.' . $image->getClientOriginalExtension();
            $image->move($this->user_path, $input['imagename']);
            $job->image = $image['imagename'];
            $job->save();
        }

        toast('شغل ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::jobs.index');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('admin.job_edit', compact('job'));
    }

    public function update(Request $request)
    {

        $id = $request->get('id');
        $name = $request->get('name');

        $job = Job::find($id);
        $job->name = $name;
        $job->save();

        toast('شغل' . $name . ' به روز شد', 'success', 'bottom-right');
        return redirect()->route('admin::jobs.index');
    }

    public function delete($id)
    {
        try {
            $job = Job::find($id);
            $job->delete();

            toast('شغل ' . $job->name . ' حذف شد', 'success', 'bottom-right');
            return redirect()->route('admin::jobs.index');

        } catch (\Exception $exception) {
            toast('مشکلی پیش آمده است', 'error', 'bottom-right');
            return redirect()->route('admin::jobs.index');
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
