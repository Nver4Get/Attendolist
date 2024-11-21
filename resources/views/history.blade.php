@extends('main.layouts')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="text-center mb-4">History Aktivitas Pengguna: <strong>{{ $user->name }}</strong></h2>
            <div class="timeline">
                @foreach($activities as $activity)
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <!-- Menampilkan Hari dan Tanggal -->
                            <div class="timeline-header">
                                <h5 class="mb-1">
                                    {{ \Carbon\Carbon::parse($activity->created_at)->translatedFormat('l, d F Y') }}
                                </h5>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</small>
                            </div>
                            <!-- Status Kehadiran -->
                            <p class="mb-2">
                                <strong>Status:</strong>
                                @if($activity->attendance == 1)
                                    <span class="badge bg-success">Present</span>
                                @else
                                    <span class="badge bg-danger">Not Present</span>
                                @endif
                            </p>
                            <!-- Alasan -->
                            <p><strong>Reason:</strong> {{ $activity->reason ?? '-' }}</p>
                            <!-- Tugas -->
                            @if($activity->tasks->isNotEmpty())
                                <div class="tasks mt-3">
                                    <h6 class="mb-2">Tasks:</h6>
                                    <ul class="list-group">
                                        @foreach($activity->tasks as $task)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span>{{ $task->task }}</span>
                                                <span class="badge bg-primary">{{ $task->progress }}%</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <p class="text-muted mt-3">No tasks available.</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
/* Timeline Wrapper */
.timeline {
    position: relative;
    padding-left: 30px;
    border-left: 2px solid #dee2e6;
}

/* Timeline Item */
.timeline-item {
    position: relative;
    margin-bottom: 30px;
    padding-left: 20px;
}

/* Timeline Dot */
.timeline-dot {
    position: absolute;
    top: 0;
    left: -6px;
    width: 12px;
    height: 12px;
    background-color: #0d6efd;
    border-radius: 50%;
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px #dee2e6;
}

/* Timeline Content */
.timeline-content {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Timeline Header */
.timeline-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.timeline-header h5 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: bold;
    color: #0d6efd;
}
</style>
@endsection
