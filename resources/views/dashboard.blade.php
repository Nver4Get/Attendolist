@extends('main.main')
@section('mainContent')
<div class="container div-table">
  <div class="table-responsive">
    <table class="table table-sm caption-top custom-table">
      <caption>Welcome to AttenDoList, please fill your attendence, tasks and don't forget to fill your progress tasks</caption>
      <caption>D/M/Y</caption>
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
          <td>✅</td>
          <td>Designing Poster</td>
          <td>50%</td>
        </tr>
        <tr>
          <th scope="row">Monday</th>
          <td>❌</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <th scope="row">Tuesday</th>
          <td>+</td>
          <td>+</td>
          <td>+</td>
        </tr>
        <tr>
          <th scope="row">Wednesday</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Thursday</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Friday</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">Saturday</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
