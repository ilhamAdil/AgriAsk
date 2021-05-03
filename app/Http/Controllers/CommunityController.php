<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;
use App\Article;
use App\Tag;
use App\Answer_has_user;
use App\Tag_has_question;
use Auth;

class CommunityController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $questions = Question::orderBy('id','DESC')->get();
        // dd($questions);
        return view('content.question.index', compact('questions'));
    }

    public function store(Request $request){

        // 1. explode untuk mengubah request tags menjadi array
        // 2. looping ke array tags tadi, buat array penampung
        // 3. setiap sekali looping lakukan pengecekan apakah sudah ada tag nya
        // 4. kalau sudah ada ambil idnya
        // 5. kalau belum ada simpan dulu tagnya, lalu ambil idnya
        // 6. tampung id di array penampung
        // $tags_arr = explode(',', $request["tags"]);
        // dd($tags_arr);
        // foreach()

         //ORM - mass assignment
        $question = Question::create([
            "title" => $request["title"],
            "body" => $request["body"],
            "user_id" => Auth::id()
        ]);

        return redirect('/community');
    }

    public function destroy($id){
        Question::destroy($id);
        return redirect('/community');
    }



    public function update($id, Request $request){
        $update = Question::where('id',$id)->update([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/community');
    }

    public function edit($id){
        $question = Question::find($id);
        return view('content.question.edit', compact('question'));
    }

    public function show($id){
        // QUERY BUILDER
        // $post = DB::table('posts')->where('id',$id)->first();

        $question = Question::find($id);
        return view('content.question.show', compact('question'));
    }

    
}
