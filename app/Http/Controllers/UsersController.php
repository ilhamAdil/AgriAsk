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


class UsersController extends Controller
{
    public function index(){
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->groupBy('user_id')->orderBy('user_id','DESC')->get();

        $users = User::orderBy('id','DESC')->get();

        $tags = Tag::orderBy('id','DESC')->get();

        return view('content.users',compact('tags','users','poin'));
    }
}
