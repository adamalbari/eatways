<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Menampilkan semua blog
    public function index()
    {
        $posts = \App\Post::all();

        return view('yourview', ['posts' => $posts]);
    }

    // Menampilkan formulir untuk membuat blog baru
    public function create()
    {
        return view('blogs.create');
    }

    // Menyimpan blog baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create($request->all());

        return redirect()->route('blogs.index')
                         ->with('success','Blog created successfully.');
    }

    // Menampilkan detail blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', ['blog' => $blog]);
    }

    // Menampilkan formulir untuk mengedit blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    // Mengupdate blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return redirect()->route('blogs.index')
                         ->with('success','Blog updated successfully');
    }

    // Menghapus blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')
                         ->with('success','Blog deleted successfully');
    }
    
}

