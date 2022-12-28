<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MatchController extends Controller
{
    public function show($id)
    {
        return view('match');
    }
}