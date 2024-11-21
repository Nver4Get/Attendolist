<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Quiz;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchQuizData extends Command
{
    protected $signature = 'fetch:quiz-data {--amount=10}';
    protected $description = 'Fetch quiz data from API and store in database';

    public function handle()
    {
        // Hapus semua quiz yang ada
        Log::info('Fetching quiz data...');
        $this->info('Fetching quiz data...');
        
        Quiz::truncate();
        $amount = $this->option('amount');

        // Fetch quiz terbaru dari API
        $response = Http::get('https://opentdb.com/api.php', [
            'amount' => $amount,
        ]);
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
            $this->info("Quiz data for {$amount} questions saved successfully.");
        } else {
            $this->error('Failed to fetch quiz data.');
        }
    }
}
