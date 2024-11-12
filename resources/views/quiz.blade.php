@extends('main.quiz')
@section('quiz')
<a href="/games">
    <i class="fa-solid fa-circle-arrow-left arrow-back" title="Back to Dashboard"></i>
</a>
    <div class="wrapper">
        <div class="quiz mt-5">
            <h1>QUIZ</h1>
        </div>
        <div class="desc mb-5">
            <p>This is a multiple choice quiz that can increase your knowledge, so it doesn't matter if you are studying or have already studied.</p>
        </div>
        <div class="logo">
            <i class="fa-solid fa-circle-user profile-icon"></i>
        </div>
        <div class="yourname mt-2 mb-5">
            <h4>{{ $user->name }}</h4>
        </div>
        <div class="btn-start mb-5">
            <a href="{{ route('quiz') }}">
                <button class="btn-me">Start Quiz</button>
            </a>
        </div>
        <div class="goodluck mt-5">
            <h2>Good Luck ^_^</h2>
        </div>
    </div>
@endsection
