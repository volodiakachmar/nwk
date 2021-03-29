<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function archive()
    {
        $posts = Post::all();

        return view('posts.archive', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|max:100000',
            'category'=> 'required|max:100000',
            'description_1'=> 'required|max:100000',
            'description_2'=> 'required|max:100000',
            'description_3'=> 'required|max:100000',
            'description_4'=> 'required|max:100000',
            'image_1_title'=> 'required|image',
        ]);


        $imageName_1 =  $request->image_1_title->store('public');

        $post = new Post([
            'title' => $request->get('title'),
            'description_1' => $request->get('description_1'),
            'description_2' => $request->get('description_2'),
            'description_3' => $request->get('description_3'),
            'description_4' => $request->get('description_4'),
            'under_photo_text' => $request->get('under_photo_text')
        ]);

        $post->image_1_title=$imageName_1;

        $post->save();

        return redirect('/posts')->with('success', 'Пост успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->category = $request->get('category');
        $post->description_1 = $request->get('description_1');
        $post->description_2 = $request->get('description_2');
        $post->description_3 = $request->get('description_3');
        $post->description_4 = $request->get('description_4');
        $post->under_photo_text = $request->get('under_photo_text');
        $post->comment_1 = $request->get('comment_1');
        $post->comment_1 = $request->get('comment_2');
        $post->comment_1 = $request->get('comment_3');
        $post->comment_1 = $request->get('comment_4');
        $post->comment_1 = $request->get('comment_5');


        $post->save();

        return redirect('/posts')->with('success', 'Пост успешно отредактирован!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted');

    }
}
