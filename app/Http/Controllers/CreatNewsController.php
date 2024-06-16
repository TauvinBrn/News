<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class CreatNewsController extends Controller
{
    public function __invoke()
    {
        $news = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'img'=>'string',
        ]);
        News::create($news);
    }
}
