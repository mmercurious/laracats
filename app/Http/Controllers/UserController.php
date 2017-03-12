<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

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

    public function changePassword() {
    	# code...
    }

    public function save(Request $request)
    {
    	# code...
    }
}
