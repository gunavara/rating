@extends('master')
@section('content')
<div class="container">
<div class="well well-lg" style="text-align: center;">
  <h3>Резултати от гласувания</h3>
</div>
  <br />
  <div class="container">

    <table class="table table-striped">
      <thead>
        <tr class="success">
          <th>Име</th>
          <th>Длъжност</th>
          <th>Гласове</th>
          <th>Оценка</th>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $emp)
        <tr>
          <td>{{$emp->emp_name}}</td>
          <td>{{$emp->emp_position}}</td>
          <td>{{$emp->emp_votes}}</td>
          <td>{{number_format($emp->emp_avarage, 2)}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>



@endsection
