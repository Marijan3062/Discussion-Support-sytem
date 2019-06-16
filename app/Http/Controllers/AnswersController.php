<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswersController extends Controller
{
    //
    public function show()
    {
        $answer = Answer::findOrFail(1);

        return view('Answers/show', compact('answer'));
    }

    public function vote()
    {   // gets the request object
        $request = request();

        //finds an answer with `id = 1
        $answer = Answer::find(1);

        //create new empty object of the model vote
        $vote = new \App\Vote;

        //set the answer_id of vote to be the same as the if of the voted answer
        //(practically specifying the relationship)
        $vote->answer_id = $answer->id;

        if ($request->input('up')) { // if there is some 'up' in the request (get or post)
            //set the value of 'vote' property of the vote to 1
            $vote->vote = 1;
            $answer->rating++; // raises the number of ratings in the answer object by 1
        } elseif ($request->input('down')) {
            $vote->vote = -1;
            $answer->rating--;
        }

        $vote->save();
        $answer->save();

        return back();
    }
}
