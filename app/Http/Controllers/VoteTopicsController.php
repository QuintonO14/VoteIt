<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jcc\LaravelVote\Vote;

class VoteTopicsController extends Controller
{
   public function index()
   {
       $user = Auth::user();
       $topics = Topic::all()->sortByDesc('created_at');
       $votes = $user->votedItems(Topic::class)->count();
       return view('vote',compact('topics','user','votes'));
   }

   public function upvote($id)
   {
       $user = Auth::user();
       $topic = Topic::findOrFail($id);

       $user->upVote($topic);

       return response()->json();
   }

   public function downvote($id)
   {
       $user = Auth::user();
       $topic = Topic::findOrFail($id);

       $user->downVote($topic);

       return response()->json();

   }

   public function makeBallot(Request $request)
   {
       $this->validate($request,[
          'name' => 'required|max:100|min:3',
          'detail' => 'required|max:10000|min:100',
       ]);

       $topic = $request->all();

       Topic::create($topic);

       return redirect('/vote');


   }
}
