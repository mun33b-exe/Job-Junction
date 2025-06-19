<?php

namespace App\Http\Controllers;

use App\Models\profile;
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
        return redirect()->route('login.view')->with('success', 'Logged out successfully!');

    }

}
