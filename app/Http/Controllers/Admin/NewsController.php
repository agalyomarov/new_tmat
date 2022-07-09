<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all()->reverse();
        return view('admin.news', compact('news'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if ($data['content'] && $data['date']) {
            News::create(['date' => $data['date'], 'content' => $data['content']]);
            return redirect()->route('admin.news.index');
        }
        return redirect()->route('admin.news.index');
    }
    public function edit(News $article, Request $request)
    {
        $news = News::all()->reverse();
        // dd($article);
        return view('admin.news', compact('news', 'article'));
    }
    public function update(News $article, Request $request)
    {
        $data = $request->all();
        if ($data['content'] && $data['date']) {
            News::where('id', $article->id)->update(['date' => $data['date'], 'content' => $data['content']]);
            return redirect()->route('admin.news.index');
        }
        return redirect()->route('admin.news.index');
    }
    public function delete(News $article)
    {
        $article->delete();
        return redirect()->route('admin.news.index');
    }
}
