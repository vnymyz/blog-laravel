<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('dashboard.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Buat request validation kalau ada waktu
        // For now, let's skip it

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author_id' => Auth::id(), // Ambil dari auth session
            'category_id' => $request->category,
            'body' => $request->body,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('dashboard.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('dashboard.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Data perlu di-validasi dulu jika memungkinkan
        // Let's skip it for now

        $post = Post::find($request->id); 

        // Edit data sebelumnya dari post yang akan di-edit
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->slug = Str::slug($request->title); // Buat slug baru karena judul berubah
        $post->body = $request->body;
        $post->updated_at = now();
        
        $post->save(); // Simpan post dengan data yang telah diubah.

        return redirect()->route('dashboard')->with('success', "Data berhasil di update!"); // with() digunakan bila di frontend ingin menampilkan success message, misal dengan menggunakan toast.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Post $post)
    {
        dd($request->all());
    }
}
