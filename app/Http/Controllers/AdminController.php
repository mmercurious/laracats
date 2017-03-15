<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
    	$users = User::all();

    	return view('admins.index', compact('users'));
    }

    public function removeStatus(User $user) {
    	if (Auth::user()->id != $user->id) {
    		
    		return back()->with('status', 'Admin role revoked.');
    	}

    	return back()->with('status', 'You cannot remove admin status from yourself.');
    }

    public function makeStatus(User $user) {
    	$user->roles()->attach(Role::where('name', 'admin')->first());
    	return back()->with('status', 'Admin role granted.');
    }

    public function deleteUser($value='')
    {
    	# code...
    }

    public function confirmDelete($value='')
    {
    	# code...
    }
}
