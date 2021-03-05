<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function gambar(Request $request)
    {

        $request->validate([
            'description' => 'required',
            'image' => 'required'
        ]);

        $post = New Post;
        $post->description = $request->description;
        $post->user_id = auth()->id();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $post->image = $fileName;
        }

        $post->save();
        return back();
    }

    public function index()
    {
        $post = \App\Post::all();
        // echo($post);
        return view('home', ['data_gambar' => $post]);
    }
}
