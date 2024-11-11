@extends('main.biodata')
@section('mainContent')
    <a href="/dashboard">
        <i class="fa-solid fa-circle-arrow-left arrow-back" title="Back to Dashboard"></i>
    </a>
    <div class="user-name">{{ $user->name }}</div>
    <i class="fa-solid fa-circle-user profile-icon"></i>
    <div class="user-email">{{ $user->email }}</div>
    <div>
        <a href="/settings"><i class="fa-solid fa-gear settings" title="Settings"></i></a>
        <a href="#"></a><i class="fa-solid fa-sitemap organization" title="Organization"></i>
    </div>
@endsection