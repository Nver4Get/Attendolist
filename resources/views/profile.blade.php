@extends('main.biodata')
@section('mainContent')
    <a href="/dashboard">
        <i class="fa-solid fa-circle-arrow-left arrow-back" title="Back to Dashboard"></i>
    </a>
    <div class="user-name">{{ $user->name }}</div>
    <i class="fa-solid fa-circle-user profile-icon"></i>
    <div class="user-email">{{ $user->email }}</div>
    <div>
        <a href="{{ route('profile.show', $user->id) }}"><i class="fa-solid fa-clock-rotate-left" title="History"></i></i></a>
    </div>
@endsection
