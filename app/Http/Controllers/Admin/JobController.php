<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
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
}
