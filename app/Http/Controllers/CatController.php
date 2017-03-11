<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cat;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();

        return view('cats.index', compact('cats'));
    }

    public function create()
    {
        return view('cats.create');
    
    }

    public function save(Request $request)
    {
    	$cat = Cat::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->action('CatController@index');
    }
    
}
