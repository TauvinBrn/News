<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.show');

    }
}
