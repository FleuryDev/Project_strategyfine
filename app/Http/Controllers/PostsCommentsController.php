<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\PostsComments;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostsCommentsRequest;
use App\Http\Requests\UpdatePostsCommentsRequest;

class PostsCommentsController extends Controller
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
    public function create(Request $request, Posts $posts)
    {
        $request->validate([
            'content' => 'min:1'
        ]);

        $comments = new PostsComments([
            'content' => $request->content,
            'author' => Auth::user()->name
        ]);

        $posts->comments()->save($comments);
        return redirect()->back()->with('success', 'Comment added !');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostsCommentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostsComments $postsComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostsComments $postsComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsCommentsRequest $request, PostsComments $postsComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostsComments $postsComments)
    {
        $comment = PostsComments::find($postsComments);
        $comment->comments()->delete();
        $comment->delete();
        return redirect()->back()->with('success','Comment deleted !');
    }
}