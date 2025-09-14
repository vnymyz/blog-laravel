<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * nampilin semua data
     */
    public function index()
    {
        return view('dashboard', ['posts' => Post::latest()->paginate(10)]);
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
    public function show(string $id)
    {
        //
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
