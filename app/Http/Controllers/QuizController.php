<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class QuizController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $quizzes = Cache::remember('quizzes', 60 * 60, function() {
            return Quiz::inRandomOrder()->limit(10)->get();
        });
        return view('quiz', compact('user', 'quizzes'));
    }

    public function submitQuiz(Request $request)
    {
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
