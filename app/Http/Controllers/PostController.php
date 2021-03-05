<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Point;
use DB;
use Auth;   
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
        $data['data_gambar'] = Post::where('user_id',Auth::user()->id)->get();
        $data['count_point'] = DB::table('tbl_point_user')->where('id_user',Auth::user()->id)->sum('point');
        return view('home', $data);
    }

   
}
