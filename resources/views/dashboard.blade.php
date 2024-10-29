@extends('main.dashboard')
@section('mainContent')
    <div class="container div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">
            <div class="welcome-message">
                <caption class="h4 animated-text">Welcome to AttenDoList, please fill your attendance, tasks and don't forget to fill your progress tasks.</caption>
            </div>
                <div class="dmy mt-3">
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
                        <th scope="col">Tasks</th>
                        <th scope="col">Report/Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Sunday</th>
                        <td>
                            <a data-bs-toggle="modal" class="plus-button" data-day="0" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Monday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="1" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Tuesday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="2" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="3" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="4" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="5" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td><a data-bs-toggle="modal" class="plus-button" data-day="6" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    </div>

    <!-- Attendance Modal -->
    <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceModalLabel">Attendance and To Do List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="attendanceSelect" class="form-label">Attendance</label>
                            <select class="form-select" id="attendanceSelect" name="attendance" required>
                                <option value="" disabled selected>Select Attendance</option>
                                <option value="YES">Present</option>
                                <option value="NO">Not Present</option>
                            </select>
                        </div>
                        <div id="attendanceMessage" class="mb-3">
                            Please fill the attendance first!
                        </div>

                        <!-- Form tambahan untuk tugas -->
                        <div id="taskForm" class="mb-3" style="display: none;">
                            <label for="task" class="form-label">Task</label>
                            <div class="input-group mb-3" id="taskInputContainer">
                                <input type="text" class="form-control" id="task" name="task[]"
                                    placeholder="Enter your task" required>
                                <button type="button" class="btn btn-outline-secondary" id="addTaskButton">+</button>
                            </div>

                        </div>
                        <!-- Form tambahan untuk alasan ketidakhadiran -->
                        <div id="reasonForm" class="mb-3" style="display: none;">
                            <label for="reason" class="form-label">Reason for absence</label>
                            <textarea class="form-control" id="reason" name="reason" placeholder="Enter your reason for not attending"></textarea>
                            <br>
                            <label for="reason" class="form-label">Proof</label>
                            <input class="form-control" id="reason" type="file" name="proof"></input>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil semua tombol plus
        var plusButtons = document.querySelectorAll('.plus-button');
        var today = new Date().getDay();

        // Sembunyikan semua tombol plus kecuali yang sesuai dengan hari ini
        plusButtons.forEach(function(button) {
            if (parseInt(button.getAttribute('data-day')) !== today) {
                button.style.display = 'none';
            }
        });

      // Ambil elemen-elemen yang diperlukan
const taskForm = document.getElementById('taskForm');
const addTaskButton = document.getElementById('addTaskButton');
const taskInputContainer = document.getElementById('taskInputContainer');
const attendanceMessage = document.getElementById('attendanceMessage');
const reasonForm = document.getElementById('reasonForm');
const attendanceSelect = document.getElementById('attendanceSelect'); // Pastikan ini ada di HTML

// Event listener untuk tombol tambah task
addTaskButton.addEventListener('click', function() {
    // Buat elemen input baru untuk task
    const newTaskGroup = document.createElement('div');
    newTaskGroup.className = 'input-group mb-3';

    const newTaskInput = document.createElement('input');
    newTaskInput.type = 'text';
    newTaskInput.className = 'form-control';
    newTaskInput.name = 'task[]';
    newTaskInput.placeholder = 'Enter your task';

    const removeTaskButton = document.createElement('button');
    removeTaskButton.type = 'button';
    removeTaskButton.className = 'btn btn-outline-danger';
    removeTaskButton.textContent = '-';

    // Event listener untuk tombol hapus
    removeTaskButton.addEventListener('click', function() {
        newTaskGroup.remove();
    });

    // Tambahkan input dan tombol hapus ke dalam grup baru
    newTaskGroup.appendChild(newTaskInput);
    newTaskGroup.appendChild(removeTaskButton);

    // Tambahkan grup baru ke dalam taskForm
    taskForm.appendChild(newTaskGroup);
});

// Event listener untuk dropdown kehadiran
attendanceSelect.addEventListener('change', function() {
    if (attendanceSelect.value === "1") { // Jika "Present" dipilih
        attendanceMessage.style.display = 'none';
        taskForm.style.display = 'block';
        reasonForm.style.display = 'none';
    } else if (attendanceSelect.value === "0") { // Jika "Not Present" dipilih
        attendanceMessage.style.display = 'none';
        taskForm.style.display = 'none';
        reasonForm.style.display = 'block';
    } else { // Jika tidak ada yang dipilih
        attendanceMessage.style.display = 'block';
        taskForm.style.display = 'none';
        reasonForm.style.display = 'none';
    }
});

    </script>
    </script>
@endsection
