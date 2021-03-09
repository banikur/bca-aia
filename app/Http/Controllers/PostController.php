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
        DB::table('tbl_point_user')->insert([
            'id_user' => Auth::user()->id,
            'objective' => 'Unggah Aktifitas',
            'point' => 50,
        ]);
        return back();
    }

    public function index()
    {
        $data['data_gambar'] = Post::all();
        $data['count_point'] = DB::table('tbl_point_user')->where('id_user', Auth::user()->id)->sum('point');
       
        $data_klasmen = Point::leftjoin('users', 'tbl_point_user.id_user', 'users.id')
            ->groupBy('users.name')
            ->selectRaw('users.name, sum(tbl_point_user.point) as sum')
            ->get();
        $your_rank = 0;
        for ($i = 0; $i < count($data_klasmen); $i++) {
            if ($data_klasmen[$i]['name'] ==  Auth::user()->name) {
                $your_rank = $i + 1;
            }
        }

        $data['your_rank']= $your_rank .' dari '. count($data_klasmen);
        $data['data_klasmen'] = json_decode($data_klasmen);
        return view('home', $data);
    }
}
