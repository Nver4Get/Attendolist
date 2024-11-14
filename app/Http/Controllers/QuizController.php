<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $quizzes = Quiz::all();
        return view('quiz', compact('user', 'quizzes'));
    }

    public function submitQuiz(Request $request)
    {
        // dd($request);
        $correctAnswers = 0;
        foreach ($request->input('answers') as $quizId => $answer) {
            $quiz = Quiz::find($quizId);
            if ($quiz && $quiz->correct_answer === $answer) {
                $correctAnswers++;
            }
        }

        return redirect('/quiz')->with('score', $correctAnswers);
    }
}
