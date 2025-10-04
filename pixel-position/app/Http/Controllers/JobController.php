<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->latest()
            ->get()
            ->groupBy('is_featured');

        return view('jobs.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $request['is_featured'] = $request->has('is_featured');

        $job = Auth::user()->employer->jobs()->create($request->except('tags', '_token', '_method'));

        if ($request->has('tags')) {
            foreach (explode(',', $request->tags) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
