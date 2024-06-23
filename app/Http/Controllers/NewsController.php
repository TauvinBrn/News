<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreRequest;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
    public function create()
    {
        return view('news.create');
    }
    public function store(StoreRequest $request)
    {
        $news = $request->validated();
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
    public function update(UpdateRequest $request, $id)
    {
        $news = News::find($id);
        $news->update( $request->validated());

        return redirect()->route('news.index');
    }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.show');
    }
}
