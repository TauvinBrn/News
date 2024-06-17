<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        $news = News::all();

        return view('news.show', compact('news'));
    }
}
