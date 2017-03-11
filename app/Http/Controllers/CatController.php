<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cat;
use Illuminate\Support\Facades\Auth;

class CatController extends Controller
{
    public function index() {
        //$cats = Cat::all();
        $cats = Cat::orderBy('created_at', 'desc')->get();

        return view('cats.index', compact('cats'));
    }

    public function create() {
        return view('cats.create');
    
    }

    public function save(Request $request) {
    	$user = Auth::user();
    	$cat = Cat::create([
            'name' => $request->name,
            'description' => $request->description,
            'creator' => $user->id,
        ]);

        return redirect()->action('CatController@index')->with('status', 'Cat was added.');
    }

    public function show(Cat $cat) {
        return view('cats.show', compact('cat'));
    }
    
}
