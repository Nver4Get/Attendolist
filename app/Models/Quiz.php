<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'type',
        'difficulty',
        'question',
        'correct_answer',
        'incorrect_answers',
    ];
}
