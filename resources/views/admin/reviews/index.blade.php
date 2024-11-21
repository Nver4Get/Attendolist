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
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->name }}</td>
                <td>{{ $review->email }}</td>
                <td>{{ $review->message }}</td>
                <td>
                    @if ($review->created_at)
                        {{ \Carbon\Carbon::parse($review->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i') }}
                    @else
                        Not Available
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection