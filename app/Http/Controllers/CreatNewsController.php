<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreatNewsController extends Controller
{
    public function __invoke()
    {
        $news = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'description' => 'string',
            'images'=>'file',
            'images2' =>'file',
        ]);
        $news['images'] = Storage::put('/news', $news['images']);
        $news['images2'] = Storage::put('/news', $news['images2']);


        News::create($news);

        return redirect()->route('news.index');
    }
}
