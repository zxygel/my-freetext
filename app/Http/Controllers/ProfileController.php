<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use Auth;
class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
    	$user = User::find(Auth::id());
    	$profile = Profile::where('user_id', $user->id)->first();
    	return view('template.user.profile',['user' => $user,'profile' => $profile]);
    }

    public function formProfile(Request $request)
    {
    	$user = User::find($request->id);
    	$profile = Profile::where('user_id', $user->id)->first();
    	return view('template.user.formprofile',['user' => $user,'profile' => $profile]);
    }

    public function updateProfile(Request $request)
    {
    	$request->validate([
    		'birthdate' => 'required|date',
    		'contact' => 'required|numeric',
    		'address' => 'required',
    		'gender' => 'required|in:Male,Female',
    	]);
    	$user = User::find(Auth::id());
    	$profile = Profile::where('user_id', $user->id)->first();
    	$profile->birthdate = $request->birthdate;
    	$profile->contact = $request->contact;
    	$profile->address = $request->address;
    	$profile->gender = $request->gender;
    	$profile->tin = $request->tin;
    	$profile->user_id = Auth::id(); // Auth::user()->id
    	$profile->save();
    	return back()->withInput();

    }
}
