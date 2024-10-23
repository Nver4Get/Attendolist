@extends('main.main')
@section('mainContent')
    <?php
    $sunday_filled = true;
    ?>
    <div class="container div-table">
        <div class="container mt-5 text-center" style="max-width: 750px;">
            <caption class="h4">Welcome to AttenDoList, please fill your attendance, tasks and don't forget to fill your progress tasks</caption>
            <div class="dmy mt-3">
                <caption class="h5 mt-3">D/M/Y</caption>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-sm caption-top custom-table">
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
                            <a href="#">
                                <i class="fa-solid fa-plus" <?php if (!$sunday_filled) {
                                    echo 'style="pointer-events: none; opacity: 0.5;"';
                                } ?>></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Monday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr class="tuesday">
                        <th scope="row">Tuesday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
