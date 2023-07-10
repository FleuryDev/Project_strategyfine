<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::with('category', 'user')->latest()->get();
        return view('blogs.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('blogs.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostsRequest $request)
    {
        $post = Posts::crate([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('succes', 'Post created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        return view('blogs.show', ['post' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        $arrg = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        $posts->update($arrg);
        if (Gate::denies('update-post', $posts)) {
            abort(403);
        }
        return redirect()->back()->with('success', 'Post updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        if (Gate::denies('delete-post', $posts)) {
            abort(403);
        }
        //$posts->comments()->delete();
        $posts->delete();
        return redirect()->back()->with('success', 'Post deleted !');

    }
}