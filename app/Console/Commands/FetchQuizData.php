<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Quiz;
use Illuminate\Support\Facades\Http;

class FetchQuizData extends Command
{
    protected $signature = 'fetch:quiz-data';
    protected $description = 'Fetch quiz data from API and store in database';

    public function handle()
    {
        $response = Http::get('https://opentdb.com/api.php?amount=10');
        $data = $response->json();

        if ($data['response_code'] === 0) {
            foreach ($data['results'] as $quizData) {
                Quiz::create([
                    'category' => $quizData['category'],
                    'type' => $quizData['type'],
                    'difficulty' => $quizData['difficulty'],
                    'question' => $quizData['question'],
                    'correct_answer' => $quizData['correct_answer'],
                    'incorrect_answers' => json_encode($quizData['incorrect_answers']),
                ]);
            }
            $this->info('Quiz data saved successfully.');
        } else {
            $this->error('Failed to fetch quiz data.');
        }
    }
}
