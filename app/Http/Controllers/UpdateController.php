<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke($id)
    {
        $news = News::find($id);
        $news->update( request()->validate([
            'title' => 'string',
            'content' => 'string',
            'description' => 'string',
        ]));

        return redirect()->route('news.index');
    }
}
