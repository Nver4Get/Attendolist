@extends('main.reviews')

@section('mainContent')
<div class="container py-5">
    <h1>Reviews</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->name }}</td>
                <td>{{ $review->email }}</td>
                <td>{{ e($review->message) }}</td>
                <td><a href="{{ route('send-email', ['email' => urlencode( $review->email)]) }}"><i class="fa-regular fa-pen-to-square"></i> Compose</a></td>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <td>
                    {{ optional($review->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i') ?? 'Not Available' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection