@extends('main.questions')

@section('questions')
<div class="container mt-5">
    <h1 class="text-center mb-5">Select The Correct Answer</h1>

    <form action="/submit-quiz" method="post">
        @csrf
        @foreach ($quizzes as $index => $quiz)
            <div class="mb-4">
                <p><strong>{{ $index + 1 }}. {{ $quiz->question }}</strong></p>
                @foreach ($quiz->shuffled_answers as $answer)
                    <div class="form-check">
                        <input type="radio" name="answers[{{ $quiz->id }}]" value="{{ $answer }}"
                               class="form-check-input" id="answer-{{ $quiz->id }}-{{ $loop->index }}">
                        <label class="form-check-label" for="answer-{{ $quiz->id }}-{{ $loop->index }}">
                            {{ $answer }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
