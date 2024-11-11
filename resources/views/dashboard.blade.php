@extends('main.dashboard')
@section('mainContent')
    <div class="container div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">

            <div class="dmy mt-3">
                <marquee class="h4 animated-text">Welcome to AttenDoList! Please fill your attendance, tasks and don't forget to fill your progress tasks.</marquee>
                <caption class="h5 mt-3">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</caption>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="0" data-bs-target="#attendanceModal"
                                href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </td>
                        <td colspan="2">
                            @if ($today->isSunday())
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSunday">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSunday"
                                                aria-expanded="false" aria-controls="collapseSunday">
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
                    <tr>
                        <th scope="row">Monday</th>
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="1" data-bs-target="#attendanceModal"
                                href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="2" data-bs-target="#attendanceModal"
                                href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="3" data-bs-target="#attendanceModal"
                                href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="4"
                                data-bs-target="#attendanceModal" href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="5"
                                data-bs-target="#attendanceModal" href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="6"
                                data-bs-target="#attendanceModal" href="#" onclick="UpdateAttendanceModal(this)">
                                <i class="fa-solid fa-plus"></i>
                            </a>
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
                        <form action="#" method="POST" enctype="multipart/form-data">
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
                                <input class="form-control" id="reason" type="file" name="proof"></input>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submitButton" style="display: none;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Kode untuk menyembunyikan tombol plus
            document.addEventListener('DOMContentLoaded', function() {
                // Kode untuk menyembunyikan tombol plus sesuai hari
                var plusButtons = document.querySelectorAll('.plus-button');
                var today = new Date().getDay(); // 0 (Sunday) to 6 (Saturday)

                plusButtons.forEach(function(button) {
                    const buttonDay = parseInt(button.getAttribute('data-day'));

                    if (buttonDay !== today) {
                        button.style.display = 'none';
                    } else {
                        button.style.display =
                        'inline-block'; // Make sure to display the button if it’s the correct day
                    }
                });
            });

            // Ambil elemen-elemen yang diperlukan
            const taskForm = document.getElementById('taskForm');
            const addTaskButton = document.getElementById('addTaskButton');
            const attendanceMessage = document.getElementById('attendanceMessage');
            const reasonForm = document.getElementById('reasonForm');
            const attendanceSelect = document.getElementById('attendanceSelect');

            // Event listener untuk tombol tambah task
            addTaskButton.addEventListener('click', function() {
                const newTaskGroup = document.createElement('div');
                newTaskGroup.className = 'input-group mb-3';

                // Input untuk Task
                const newTaskInput = document.createElement('input');
                newTaskInput.type = 'text';
                newTaskInput.className = 'form-control';
                newTaskInput.name = 'tasks[]';
                newTaskInput.placeholder = 'Enter your task';

                // Input untuk Progress per Task
                const newProgressInput = document.createElement('input');
                newProgressInput.type = 'text';
                newProgressInput.className = 'form-control';
                newProgressInput.name = 'progress[]';
                newProgressInput.placeholder = 'Enter progress for this task';
                newProgressInput.disabled = true;

                // Tombol hapus task dan progress
                const removeTaskButton = document.createElement('button');
                removeTaskButton.type = 'button';
                removeTaskButton.className = 'btn btn-outline-danger';
                removeTaskButton.textContent = '-';

                removeTaskButton.addEventListener('click', function() {
                    newTaskGroup.remove();
                });

                // Tambahkan elemen task, progress, dan tombol hapus ke grup baru
                newTaskGroup.appendChild(newTaskInput);
                newTaskGroup.appendChild(newProgressInput);
                newTaskGroup.appendChild(removeTaskButton);

                // Sisipkan grup baru ke dalam taskForm sebelum progressInput
                taskForm.appendChild(newTaskGroup);
            });

            // Event listener untuk dropdown kehadiran
            attendanceSelect.addEventListener('change', function() {
                if (attendanceSelect.value === "1") {
                    attendanceMessage.style.display = 'none';
                    taskForm.style.display = 'block';
                    reasonForm.style.display = 'none';
                } else if (attendanceSelect.value === "0") {
                    attendanceMessage.style.display = 'none';
                    taskForm.style.display = 'none';
                    reasonForm.style.display = 'block';
                } else {
                    attendanceMessage.style.display = 'block';
                    taskForm.style.display = 'none';
                    reasonForm.style.display = 'none';
                }
            });

            // Fungsi untuk mengubah tampilan tombol setelah kehadiran dikonfirmasi
            function updateAttendanceButton(status) {
                const plusButtons = document.querySelectorAll('.plus-button');
                const taskRows = document.querySelectorAll('.task-row');
                plusButtons.forEach(function(button) {
                    button.innerHTML = ''; // Kosongkan isi tombol

                    if (status === "present") {
                        // Saat kehadiran adalah present
                        const checkMark = document.createElement('span');
                        checkMark.className = 'fa-solid fa-check text-success'; // Centang hijau
                        button.appendChild(checkMark); // Tambahkan centang

                        // Buat tombol update di sebelah centang
                        const updateButton = document.createElement('button');
                        updateButton.className = 'btn btn-primary btn-sm ms-2';
                        updateButton.textContent = 'Edit';
                        button.parentNode.insertBefore(updateButton, button.nextSibling);

                        // Event listener untuk tombol update
                        updateButton.addEventListener('click', function() {
                            alert("Update task clicked!");
                        });

                    } else if (status === "not_present") {
                        // Saat kehadiran adalah not present
                        const minusSign = document.createElement('span');
                        minusSign.className = 'fa-solid fa-minus text-danger'; // Minus merah
                        button.appendChild(minusSign); // Tambahkan tanda minus
                    }
                });

                taskRows.forEach(function(row) {
                    const progressColumn = row.querySelector('.progress-column');
                    const taskInput = row.querySelector('.task-input');
                    if (status === "present") {
                        progressColumn.innerHTML = '<span class="fa-solid fa-check text-success"></span>';
                    } else if (status === "not_present") {
                        progressColumn.innerHTML = '<span class="fa-solid fa-minus text-danger"></span>';
                    }
                });
            }

            // Fungsi untuk mengupdate status input progress berdasarkan waktu
            function updateProgressInput() {
                const progressInputs = document.querySelectorAll('input[name="progress[]"]');
                const now = new Date();
                const currentHour = now.getHours();
                const currentMinute = now.getMinutes();

                if (currentHour >= 17) {
                    progressInputs.forEach((progressInput) => {
                        progressInput.disabled = false;
                    });
                } else {
                    progressInputs.forEach((progressInput) => {
                        progressInput.disabled = true;
                    });
                }
            }

            // Event listener untuk submit form kehadiran
            document.getElementById('submitAttendance').addEventListener('click', function() {
                const status = attendanceSelect.value === "1" ? "present" : "not_present";
                updateAttendanceButton(status);
                document.getElementById('attendanceModal').style.display = 'none';
            });

            // Jalankan fungsi saat halaman dimuat dan perbarui setiap menit
            document.addEventListener('DOMContentLoaded', updateProgressInput);
            setInterval(updateProgressInput, 60000);
        </script>

    @endsection
