<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\UserPasswordFormRequest;
use App\Http\Requests\UserUpdateFormRequest;

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
		return view('users.change');
    }

    public function changePassword(UserPasswordFormRequest $request) {
    	$request->persist();

	    return redirect()->action('UserController@index')->with('status', 'Password was changed.');
    }

    public function save(UserUpdateFormRequest $request) {
    	$request->persist();

    	$user = Auth::user();
    	return view('users.index', compact('user'));
    }

    public function delete() {
    	return view('users.delete');
    }

    public function deleteUser(Request $request) {
    	$user = Auth::user();

    	$user->delete();

    	return redirect()->action('CatController@index')->with('status', 'User account was deleted.');
    }
}
