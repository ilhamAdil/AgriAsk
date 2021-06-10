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


class BlogController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::id())->first();
        return view('content.blog',compact('user'));
    }
}
