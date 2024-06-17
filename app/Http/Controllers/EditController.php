<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke($id)
    {

        $news = News::find($id);
        return view('news.edit', compact('news'));
    }
}
