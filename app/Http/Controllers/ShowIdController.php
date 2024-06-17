<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ShowIdController extends Controller
{

public function __invoke($id)
{
    $news = News::find($id);
//    dd($news->images);


    return view('news.news',compact('news'));

}
}
