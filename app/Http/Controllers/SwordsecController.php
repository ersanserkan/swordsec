<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwordsecController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function firstPage()
    {
        if (request()->user()->cannot('view first')) {
            abort(403);
        }

        return view('pages.first');
    }

    public function secondPage()
    {
        if (request()->user()->cannot('view second')) {
            abort(403);
        }

        return view('pages.second');
    }
}
