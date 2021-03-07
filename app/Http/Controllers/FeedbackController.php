<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index(){
        $data['testimoni'] = DB::table('testimoni')->leftjoin('users', 'testimoni.user_id', 'users.id')
        ->get();
        return view('feedback.review',$data);
    }

    public function store(Request $request)
    {
        $feedback = New Feedback;
        $feedback->testimonial = $request->testimonial;
        $feedback->user_id = auth()->id();

        $feedback->save();
        return back();
    }
}
