<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\UserPasswordFormRequest;

class UserController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	return view('users.index', compact('user'));
    }

    public function edit() {
    	$user = Auth::user();

    	return view('users.edit', compact('user'));
    }

    public function newPassword() {
		$user = Auth::user();

    	return view('users.change', compact('user'));
    }

    public function changePassword(UserPasswordFormRequest $request) {
    	$success = $request->persist();

    	if ($success) {
	        return redirect()->action('UserController@index')->with('status', 'Password was changed.');
	    }
	    else {
	    	return view('users.change')->withErrors('old', 'Password is incorrect.');
	    }
    }

    public function save(Request $request) {
    	# code...
    }

    public function delete() {
    	return view('users.delete');
    }

    public function deleteUser(Request $request) {
    	
    }
}
