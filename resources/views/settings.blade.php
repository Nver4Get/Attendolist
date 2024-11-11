@extends('main.settings_view')
@section('mainContent')
    <a href="/profile" title="Back to Dashboard">
        <i class="fa-solid fa-circle-arrow-left"></i>
    </a>
    <div class="settings-container">
        <h2>Settings</h2>
        <div class="setting-item">
            <i class="fa-solid fa-language"></i> <span>Language</span>
            <i class="fa-solid fa-moon"></i>
        </div>
    </div>
@endsection