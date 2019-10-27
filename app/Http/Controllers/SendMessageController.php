<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \Illuminate\Validation\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\View\Factory;
use Validator;
class SendMessageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if (View::exists('template.sendmessage')) {
    		return view('template.sendmessage',['a',$request->a]);
    		// print_r($request->all());
    	}else{
    		abort(403, 'Unauthorized action.');
    	}
    	
    }

    public function submit(Request $request)
    {
    	// return $this->validateForm($request->all());
    	$request->validate([
    		'mobile' => 'required|min:13|numeric',
            'message' => 'required',
    	]);
    	redirect()->route("sendmessage")->with('message','Success');
    }

    public function validateForm($data)
    {
    	return Validator::make($data, [
            'mobile' => 'required|min:13|numeric',
            'message' => 'required',
        ]);
    }
}
