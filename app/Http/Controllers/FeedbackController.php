<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use DB;

class FeedbackController extends Controller
{
    public function index(){
        return view('feedback/review');
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
