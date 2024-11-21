<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function showQuiz()
    {
        $quizzes = Quiz::inRandomOrder()->limit(10)->get();  // Ambil semua quiz dari database

    // Mengacak jawaban untuk setiap quiz
    foreach ($quizzes as $quiz) {
        // Gabungkan jawaban yang benar dan salah
        $answers = [$quiz->correct_answer];
        $answers = array_merge($answers, json_decode($quiz->incorrect_answers));

        // Acak urutan jawaban
        shuffle($answers);

        // Menyimpan urutan jawaban yang sudah diacak ke dalam quiz
        $quiz->shuffled_answers = $answers;
    }

    return view('questions', compact('quizzes'));
    }
}
