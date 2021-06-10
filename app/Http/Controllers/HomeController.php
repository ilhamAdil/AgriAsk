<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Question;
use App\Answer;
use App\Article;
use App\Tag;
use App\Tag_has_question;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('id',Auth::id())->first();

        return view('content.home',compact('user'));
    }
}
