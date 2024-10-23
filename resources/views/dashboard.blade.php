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
                        <th scope="row">Monday</th>
                        <td><a href="#" class="plus-button" data-day="1"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Tuesday</th>
                        <td><a href="#" class="plus-button" data-day="2"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td><a href="#" class="plus-button" data-day="3"><i class="fa-solid fa-plus"></i></a>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td><a href="#" class="plus-button" data-day="4"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td><a href="#" class="plus-button" data-day="5"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td><a href="#" class="plus-button" data-day="6"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Sunday</th>
                        <td><a href="#" class="plus-button" data-day="0"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                </tbody>
            </table>
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
