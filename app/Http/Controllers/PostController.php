<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\post ;
use  App\Models\User ;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $postCollection = Post::all(); //select * from posts

        return view('posts.index', ['postCollectionView' => $postCollection]);
    }



    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);

    }
    public function store(Request $requestObj)
    {
     //  $request=$requestObj->all();
        $requestObj->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'user_id' => 'required','exists:users,id',
        ]);

        //insert into
        post::create([
             'title' =>  $requestObj['title'],
            'description' => $requestObj['description'],
            'user_id' =>$requestObj['user_id'],
        ]);

        return redirect()->route('posts.index');

    }


    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }


    public function destroy($id)
{
    $post = Post::find($id);

    $post->delete();

    return redirect()->route('posts.index');
}
}
