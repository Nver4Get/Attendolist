@extends('main.dashboard')
@section('mainContent')
    <div class="div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">
            <div class="dmy mt-3">
                <marquee class="h4">Welcome to AttenDoList! Please fill your attendance, tasks and don't forget to fill
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
                    <tr>
                        <th scope="row">Sunday</th>
                        <td id="attendance-status">
                            @if ($today->isSunday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="0" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isSunday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSunday">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSunday" aria-expanded="false" aria-controls="collapseSunday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseSunday" class="accordion-collapse collapse"
                                            aria-labelledby="headingSunday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Sunday</div>
                            @endif
                        </td>
                    </tr>
                    {{-- dst --}}
                    <tr>
                        <th scope="row">Monday</th>
                        <td id="attendance-status">
                            @if ($today->isMonday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="1" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isMonday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingMonday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseMonday"
                                                aria-expanded="false" aria-controls="collapseMonday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseMonday" class="accordion-collapse collapse"
                                            aria-labelledby="headingMonday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Monday</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Tuesday</th>
                        <td id="attendance-status">
                            @if ($today->isTuesday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="2" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isTuesday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTuesday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTuesday"
                                                aria-expanded="false" aria-controls="collapseTuesday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseTuesday" class="accordion-collapse collapse"
                                            aria-labelledby="headingTuesday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Tuesday</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td id="attendance-status">
                            @if ($today->isWednesday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="3" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isWednesday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingWednesday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseWednesday"
                                                aria-expanded="false" aria-controls="collapseWednesday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseWednesday" class="accordion-collapse collapse"
                                            aria-labelledby="headingWednesday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Wednesday</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td id="attendance-status">
                            @if ($today->isThursday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="4" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isThursday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingMonday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThursday"
                                                aria-expanded="false" aria-controls="collapseThursday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseThursday" class="accordion-collapse collapse"
                                            aria-labelledby="headingThursday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Thursday</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td id="attendance-status">
                            @if ($today->isFriday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="5" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isFriday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFriday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFriday"
                                                aria-expanded="false" aria-controls="collapseFriday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseFriday" class="accordion-collapse collapse"
                                            aria-labelledby="headingFriday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Friday</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td id="attendance-status">
                            @if ($today->isSaturday())
                                @if ($activities->isEmpty() || $activities->first()->attendance === null)
                                    <!-- Jika attendance belum ada, tampilkan ikon plus -->
                                    <a data-bs-toggle="modal" class="plus-button" data-day="6" data-bs-target="#attendanceModal" href="#">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                @else
                                    <!-- Tampilkan status attendance sesuai nilai di database -->
                                    @if ($activities->first()->attendance === 1)
                                        <span class="attendance-status" data-attendance="present">Present</span>
                                        <button class="btn btn-sm btn-secondary" onclick="openUpdateModal()">Update</button>
                                    @else
                                        <span class="attendance-status" data-attendance="not_present">Not Present</span>
                                    @endif
                                @endif
                            @endif
                        </td>
                        <td colspan="2">
                            @if ($today->isSaturday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSaturday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseMonday"
                                                aria-expanded="false" aria-controls="collapseSaturday">
                                                Show Tasks and Progress
                                            </button>
                                        </h2>
                                        <div id="collapseSaturday" class="accordion-collapse collapse"
                                            aria-labelledby="headingSaturday" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Tasks:</strong>
                                                <ul>
                                                    @foreach ($activities as $activity)
                                                        <li>{{ $activity->tasks }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>No tasks for Saturday</div>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Attendance Modal -->
        <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel"
            aria-hidden="true">
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
                                    <input type="text" class="form-control" id="task" name="tasks[]"
                                        placeholder="Enter your task">
                                    <input type="text" class="form-control" disabled name="progress[]"
                                        placeholder="Enter progress for this task">
                                    <button type="button" class="btn btn-outline-secondary"
                                        id="addTaskButton">+</button>
                                </div>
                            </div>
                            <p style="font-size: 12px">You can fill progress at 5 PM</p>
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
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    @endsection
