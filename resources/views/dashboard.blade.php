@extends('main.main')
@section('mainContent')
<?php
    $sunday_filled = true;
?>
    <div class="container div-table">
        <div class="table-responsive">
            <table class="table table-sm caption-top custom-table">
                <caption>Welcome to AttenDoList, please fill your attendence, tasks and don't forget to fill your progress
                    tasks</caption>
                <caption>D/M/Y</caption>
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
                                <i class="fa-solid fa-plus" <?php if (!$sunday_filled) echo 'style="pointer-events: none; opacity: 0.5;"'; ?>></i>
                            </a>
                        </td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Monday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr class="tuesday">
                        <th scope="row">Tuesday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Wednesday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Thursday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Friday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">Saturday</th>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-plus"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
