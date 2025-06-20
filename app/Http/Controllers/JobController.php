<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new job();
        $data->job_title = $request->job_title;
        $data->job_type = $request->job_type;
        $data->salary_range = $request->salary_range;
        $data->location = $request->location;
        $data->job_description = $request->job_description;
        $data->requirements = $request->requirements;
        $data->experience_level = $request->experience_level;
        $data->application_deadline = $request->application_deadline;
        
        
        $data->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job $job)
    {
        //
    }
}
