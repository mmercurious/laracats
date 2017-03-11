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
}
