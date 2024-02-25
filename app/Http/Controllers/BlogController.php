<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.pages.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.pages.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'nullable|date',
        ]);

        Blog::create($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    public function show(Blog $blog)
    {
        return view('admin.pages.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.pages.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'nullable|date',
        ]);

        $blog->update($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
