<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * nampilin semua data
     */
    public function index()
    {
        // tampilin post yang hanya ditulis oleh author yg login aja
        $posts = Post::latest()->where('author_id', Auth::user()->id); 

        // jika ada pencarian maka tampilkan hasil pencarian
        if(request('keyword')){
            $posts->where('title', 'like', '%'. request('keyword') . '%');
        }

        // withQueryString() biar pas pindah halaman pagination keywordnya tetap ada
        return view('dashboard.index', ['posts' => $posts->paginate(5)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     * form tambah data
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * menyimpan data baru
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * menampilkan data berdasarkan id
     */
    public function show(Post $post)
    {
        return view('dashboard.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     * form edit data
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * mengupdate data
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * menghapus data
     */
    public function destroy(string $id)
    {
        //
    }
}
