<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index',  ['jobs' => Job::with('employer')->latest()->simplePaginate(4)]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'location' => ['required'],
        ]);

        $job = Job::create([
            'employer_id' => 1,
            'title' => request('title'),
            'salary' => request('salary'),
            'location' => request('location'),
        ]);

        Mail::to($job->employer->user->email_address)->queue(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
            'location' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'location' => request('location'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
