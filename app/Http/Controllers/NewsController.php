<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index():View
    {
        $news = News::latest()->get();
        return view('pages.actualites',['news' => $news]);
    }
}
