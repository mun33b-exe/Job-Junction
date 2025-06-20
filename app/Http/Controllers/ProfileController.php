<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
        $data = new profile();
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->password = Hash::Make($request->password);
        $data->phone = $request->phone;
        $data->role = $request->role;
        $data->save();
        return redirect()->route('login.view')->with('success', 'Profile created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        //
    }

    public function auth(Request $request)
    {
        $data = profile::where('email', $request->email)->first();
        
        if ($data) {
            if(Hash::check($request->password, $data->password)) {

                session(['stored_data' => $data]);
                
                if ($data->role == 'employee') {
                    return view('dashboard.employee_dashboard', compact('data'))->with('success', 'Login successful as Employee!');
                } elseif ($data->role == 'employer') {
                    return view('dashboard.employeer_dashboard', compact('data'))->with('success', 'Login successful as Employer!');
                } else {
                    return redirect()->back()->with('error', 'Access Denied! Invalid role.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid password! Please try again.');
            }
        } else {
            return redirect()->back()->with('error', 'No account found with this email address.');
        }
    }

    public function login_view(){
        return view('profile.login_page');
    }
    
    public function signup_view(){
        return view('profile.signup_page');
    }
    
    public function logout(){
        session()->forget('stored_data');
        session()->flush();
        return redirect()->route('login.view')->with('success', 'Logged out successfully!');
    }

    public function store_job(Request $request)
    {
        if (!session()->has('stored_data')) {
            return redirect()->route('login.view')->with('error', 'Session expired. Please login again.');
        }

        $stored_data = session('stored_data');
        
        $data = new job();
        $data->job_title = $request->job_title;
        $data->job_type = $request->job_type;
        $data->salary_range = $request->salary_range;
        $data->location = $request->location;
        $data->job_description = $request->job_description;
        $data->requirements = $request->requirements;
        $data->experience_level = $request->experience_level;
        $data->application_deadline = $request->application_deadline;
        $data->employer_id = $stored_data->id;
        
        if ($request->hasFile('job_image') && $request->file('job_image')->isValid()) {
            $data->job_image = $request->file('job_image')->store('job_images', 'public');
        } else {
            $data->job_image = null;
        }
        $data->save();
        return view('dashboard.employeer_dashboard', ['data' => $stored_data])->with('success', 'Job created successfully!');
    }
}
