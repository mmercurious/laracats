<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cat;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CatFormRequest;

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

    public function save(CatFormRequest $request) {
        $request->persist();

        return redirect()->action('CatController@index')->with('status', 'Cat was added.');
    }

    public function show(Cat $cat) {
        return view('cats.show', compact('cat'));
    }

    public function showMyCats() {
    	$user = Auth::user();

        $cats = $user->cats()->get();

    	return view('cats.userscats', compact('cats'));
    }

    public function killCats() {
        /*$user = Auth::user();

        $cats = $user->cats()->get();*/
        return view('cats.remove');
    }

    public function deleteOne(Cat $cat) {
        return view('cats.delete', compact('cat'));
    }

    public function confirmDeleteOne(Cat $cat) {
        $cat->delete();

        return redirect()->action('CatController@showMyCats')->with('status', 'Cat was deleted.');
    }
    
}
