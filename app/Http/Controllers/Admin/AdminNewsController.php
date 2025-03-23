<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        News::create([
            'name' => $request->name,
            'description' => $request->description,
            'author_id' => auth()->id(),
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News created');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $news->update($request->only('name', 'description'));
        return redirect()->route('admin.news.index')->with('success', 'News updated');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted');
    }
}
