<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function dashboard()
    {
        $topNews = DB::table('news')
                     ->orderByDesc('created_at')
                     ->limit(5)
                     ->get();

        $topAuthors = DB::table('news')
                        ->select('author', DB::raw('COUNT(*) as total_news'))
                        ->groupBy('author')
                        ->orderByDesc('total_news')
                        ->limit(5)
                        ->get();

        return view('admin.dashboard', compact('topNews', 'topAuthors'));
    }
}
