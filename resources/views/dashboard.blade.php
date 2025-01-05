@extends('main.dashboard')
@section('mainContent')
    <div class="div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">
            <div class="dmy mt-3">
                <marquee class="h4">Welcome to AttenDoList! fill your attendance, tasks and don't forget to fill
                    your progress tasks.</marquee>
                <p class="date h5 mt-3">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-sm caption-top custom-table" border="3">
                <thead>
                    <tr>
                        <th scope="col">Days</th>
                        <th scope="col">Attendance</th>
                        <th scope="col">Tasks & Report Progress</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        use Carbon\Carbon;

                        $daysOfWeek = [
                            0 => 'Sunday',
                            1 => 'Monday',
                            2 => 'Tuesday',
                            3 => 'Wednesday',
                            4 => 'Thursday',
                            5 => 'Friday',
                            6 => 'Saturday',
                        ];

                        $todayIndex = $today->dayOfWeek; // Hari saat ini (angka 0-6)
                    @endphp

                    @foreach ($daysOfWeek as $index => $day)
                        <tr>
                            <th scope="row">{{ $day }}</th>
                            <td id="attendance-status">
                                {{-- Jika hari sudah berlalu --}}
                                @if ($index < $todayIndex)
                                    @php
                                        // Cek aktivitas yang ada untuk hari ini
                                        $pastActivity = $activities
                                            ->filter(function ($activity) use ($index) {
                                                return $activity->created_at->dayOfWeek === $index;
                                            })
                                            ->first();
                                    @endphp

                                    @if ($pastActivity && $pastActivity->attendance == 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                    @else
                                        <span class="attendance-status">Not Present</span>
                                    @endif
                                    {{-- Hari saat ini --}}
                                @elseif ($index === $todayIndex)
                                    @php
                                        // Cek apakah ada aktivitas hari ini
                                        $todayActivity = $activities
                                            ->filter(function ($activity) use ($today) {
                                                return $activity->created_at->isSameDay($today);
                                            })
                                            ->first();
                                    @endphp

                                    @if ($todayActivity && $todayActivity->attendance == 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        {{-- Tombol Update hanya untuk hari ini --}}
                                        <button type="button" class="btn btn-warning updateButton" data-bs-toggle="modal"
                                            data-bs-target="#updateModal"
                                            data-activity-id="{{ $todayActivity->activity_id }}">
                                            Update Attendance
                                        </button>
                                    @else
                                        <a data-bs-toggle="modal" class="plus-button" data-day="{{ $index }}"
                                            data-bs-target="#attendanceModal" href="#">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    @endif
                                    {{-- Hari yang akan datang --}}
                                @else
                                    @php
                                        // Cek aktivitas untuk hari yang akan datang
                                        $futureActivity = $activities
                                            ->filter(function ($activity) use ($index) {
                                                return $activity->created_at->dayOfWeek === $index;
                                            })
                                            ->first();
                                    @endphp

                                    @if ($futureActivity && $futureActivity->attendance == 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                    @else
                                    @endif
                                @endif
                            </td>
                            <td colspan="2">
                                {{-- Dropdown untuk hari ini dan hari yang sudah berlalu --}}
                                @if ($index <= $todayIndex)
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $day }}">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $day }}"
                                                    aria-expanded="false" aria-controls="collapse{{ $day }}">
                                                    Show Tasks and Progress
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $day }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $day }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @php
                                                        $dayActivities = $activities->filter(function ($activity) use (
                                                            $index,
                                                        ) {
                                                            return $activity->created_at->dayOfWeek === $index;
                                                        });
                                                    @endphp

                                                    @if ($dayActivities->isNotEmpty())
                                                        @foreach ($dayActivities as $activity)
                                                            <div>
                                                                @if ($activity->tasks->isNotEmpty())
                                                                    <ul>
                                                                        @foreach ($activity->tasks as $task)
                                                                            <li>{{ $task->task }} (Progress:
                                                                                {{ $task->progress }}%)</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @else
                                                                    <div>No tasks available for this activity</div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div>No activities available for this day</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {{-- Hari mendatang --}}
                                    <div>No tasks for {{ $day }}</div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Attendance Modal -->
        <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attendanceModalLabel">Attendance and To Do List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="attendanceSelect" class="form-label">Attendance</label>
                                <select class="form-select" id="attendanceSelect" name="attendance" required>
                                    <option value="" disabled selected>Select Attendance</option>
                                    <option value="1">Present</option>
                                    <option value="0">Not Present</option>
                                </select>
                            </div>
                            <div id="attendanceMessage" class="mb-3">
                                Please fill the attendance first!
                            </div>
                            <!-- Form tambahan untuk tugas -->
                            <div id="taskForm" class="mb-3" style="display: none;">
                                <label for="task" class="form-label">Task and Progress</label>
                                <div class="input-group mb-3" id="taskInputContainer">
                                    <input type="text" class="form-control" id="task-1" name="tasks[]"
                                        placeholder="Enter your task">
                                    <button type="button" class="btn btn-outline-secondary" id="addTaskButton">+</button>
                                </div>

                            </div>
                            <!-- Form tambahan untuk alasan ketidakhadiran -->
                            <div id="reasonForm" class="mb-3" style="display: none;">
                                <label for="reason" class="form-label">Reason for absence</label>
                                <textarea class="form-control" id="reason" name="reason" placeholder="Enter your reason for not attending"></textarea>
                                <br>
                                <label for="reason" class="form-label">Proof</label>
                                <input class="form-control" id="proof" type="file" name="proof"></input>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submitButton"
                                style="display: none;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end attendance modal --}}
        {{-- update modal {{ route('dashboard.update', $activities->id) }} --}}
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true"
            data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Fill your tasks progress</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @php
                            // Filter activities yang sesuai dengan hari yang ingin Anda tampilkan (misalnya hari Rabu)
                            $targetDay = 3; // Misalnya 3 untuk hari Rabu (dayOfWeek: 0 = Sunday, 1 = Monday, ..., 6 = Saturday)
                            $targetActivity = $activities
                                ->filter(function ($activity) {
                                    return $activity->created_at->toDateString() === now()->toDateString();
                                })
                                ->first();
                        @endphp

                        @if ($targetActivity)
                            <form action="{{ route('dashboard.update', $targetActivity->activity_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div id="task-list" class="mb-3">
                                    @foreach ($targetActivity->tasks as $index => $task)
                                        <div class="task-group" id="task-group-{{ $index }}">
                                            <div class="input-container mb-4">
                                                <!-- Task input -->
                                                <input type="text" class="form-control mb-2" name="tasks[]"
                                                    value="{{ $task->task }}" placeholder="Task name">

                                                <!-- Progress input -->
                                                <input type="text" class="form-control mb-2" name="progress[]"
                                                    value="{{ $task->progress }}" placeholder="Progress (%)">

                                                <!-- Add and delete buttons -->
                                                <button type="button"
                                                    class="btn btn-outline-secondary addTaskButton">+</button>
                                                <button type="button" class="btn btn-outline-danger deleteTaskButton"
                                                    data-task-id="{{ $task->id }}">Delete Task</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        @else
                            <p>No tasks found for this day.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- end update modal --}}

        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    @endsection
