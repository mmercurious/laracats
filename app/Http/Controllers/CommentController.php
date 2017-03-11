<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Http\Requests;

class CommentController extends Controller
{
    public function save(Cat $cat, Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $cat->addComment($request->body);

        return back();
    }
}
