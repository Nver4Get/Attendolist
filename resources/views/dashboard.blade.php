@extends('main.main')
@section('mainContent')
    <?php
    $sunday_filled = true;
    ?>
    <div class="container div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">
            <caption class="h4">Welcome to AttenDoList, please fill your attendance, tasks and don't forget to fill your
                progress tasks</caption>
            <div class="dmy mt-3">
                <caption class="h5 mt-3">D/M/Y</caption>
            </div>
        </div>
        <di<div class="table-responsive">
            <table class="table table-sm caption-top custom-table" border="1">
                <thead>
                    <tr class="">
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
                            <a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Monday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr class="tuesday">
                        <th scope="row">Tuesday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td><a data-bs-toggle="modal" data-bs-target="#attendanceModal" href="#"><i class="fa-solid fa-plus"></i></a></td>

                    </tr>
                </tbody>
            </table>
    </div>

    <!-- Attendance Modal -->
    <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attendaceModalLabel">Attendance and To Do List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="attendancelog" class="form-label">Attendance</label>
                                <select class="form-select" id="attendanceSelect" name="attendance" required>
                                    <option value="1"><i class="fa-solid fa-square-check"></i> Present</option>
                                    <option value="0"><i class="fa-solid fa-square-xmark"></i> Not Present</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                Please fill the attendance first!
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil semua tombol di kolom Report/Progress

        const reportButtons = document.querySelectorAll('td:last-child a.plus-button');
        var today = new Date().getDay();

        // Mendapatkan semua tombol plus
        var plusButtons = document.querySelectorAll('.plus-button');

        // Sembunyikan semua tombol plus kecuali yang sesuai dengan hari ini
        plusButtons.forEach(function(button) {
            if (parseInt(button.getAttribute('data-day')) !== today) {
                button.style.display = 'none';
            }
        });
    </script>
@endsection
