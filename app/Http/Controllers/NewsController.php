<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class NewsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $news = News::orderBy('created_at', 'desc')->paginate(4);
            return view('news.partials.news_list', compact('news'))->render();
        }

        $news = News::orderBy('created_at', 'desc')->paginate(4);
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function addNewsForm()
    {
        return view('news.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('news_images', 'public') : null;

        DB::table('news')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'author' => Session::get('user'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('news.indexs')->with('success', 'Новость добавлена');
    }
}
