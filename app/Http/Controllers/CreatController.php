<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatController extends Controller
{
    public function __invoke()
    {
        return view('news.create');
    }
}
