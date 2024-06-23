<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
    public function creat()
    {
        return view('news.create');
    }
    public function store()
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
    public function show()
    {
        $news = News::all();

        return view('news.show', compact('news'));
    }
    public function showID($id)
    {
        $news = News::find($id);
//    dd($news->images);
        return view('news.news',compact('news'));
    }
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }
    public function update($id)
    {
        $news = News::find($id);
        $news->update( request()->validate([
            'title' => 'string',
            'content' => 'string',
            'description' => 'string',
        ]));

        return redirect()->route('news.index');
    }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.show');
    }
}
