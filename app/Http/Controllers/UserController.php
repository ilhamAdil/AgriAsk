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


class UserController extends Controller
{
    public function index($id){
        $user = User::find($id);

        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalQuestion = Question::where('user_id',$id)->count('user_id');

        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.user',compact('totalQuestion','poin','user','answered'));
    }

    public function indexQuestion($id){
        $user = User::find($id);

        $questions = Question::where('user_id',$id)->get();
        
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalQuestion = Question::where('user_id',$id)->count('user_id');

        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.userquestion',compact('questions','totalQuestion','poin','user','answered'));
    }

    public function indexArticle($id){
        $user = User::find($id);

        
        $poin = DB::table('questions')->select([
            DB::raw('sum(poin) as poin')
        ])->where('user_id',$id)->get();

        $totalQuestion = Question::where('user_id',$id)->count('user_id');

        $answered = Answer::where('user_id',$id)->count('user_id');

        return view('content.userarticle',compact('totalQuestion','poin','user','answered'));
    }

    public function destroy($id, $quest_id){
        Question::destroy($quest_id);
        return redirect(route('listQ',['id' => $id, 'quest_id' => $quest_id]));
    }

}
