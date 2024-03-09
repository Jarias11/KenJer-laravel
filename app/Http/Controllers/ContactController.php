<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submitQuoteRequest(Request $request)
    {
        var_dump($request->all());
    }
}
