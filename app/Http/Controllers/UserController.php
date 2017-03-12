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
    	# code...
    }

    public function changePassword() {
    	# code...
    }
}
