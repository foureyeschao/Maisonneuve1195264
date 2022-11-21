<?php

namespace App\Http\Controllers;

use App\Models\ForumArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = ForumArticle::all();
        return view('forum.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newArticle = ForumArticle::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id'=> Auth::user()->id
        ]);

        return redirect(route('article.show', $newArticle->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function show(ForumArticle $forumArticle)
    {
        //
        return view('forum.show', [
            'forumArticle' => $forumArticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumArticle $forumArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumArticle $forumArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumArticle  $forumArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumArticle $forumArticle)
    {
        //
        $forumArticle->delete();
        return redirect(route('forum.index'));
    }
}
