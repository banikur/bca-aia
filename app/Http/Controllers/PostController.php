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

        $post = new Post;
        $post->description = $request->description;
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $post->image = $fileName;
        }

        $post->save();
        return back();
    }

    public function index()
    {
        $data['data_gambar'] = Post::all();
        $data['count_point'] = DB::table('tbl_point_user')->where('id_user', Auth::user()->id)->sum('point');
        // $data['data_klasmen'] = DB::select('id_user','name')->sum('point')->count('id_user')
        //                         ->from('tbl_point_user as b')->leftJoin('users as a')->on('b.id_user','=','a.id')
        //                         ->groupBy('id_user')->orderBysum('point DESC')->get();
        // Point::groupBy('id_user')->sum('point')->count('id_user')
        // dd($data_klasmen);

        $data_klasmen = Point::leftjoin('users', 'tbl_point_user.id_user', 'users.id')
            ->groupBy('users.name')
            ->selectRaw('users.name, sum(tbl_point_user.point) as sum')
            ->get();
        $data['data_klasmen'] = json_decode($data_klasmen);
        return view('home', $data);
    }
}
