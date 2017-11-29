@extends('master')
@section('content')
<div class="main">
  <div class="container">
<div class="well well-lg" style="text-align: center;"><h3>Моля, оценете нашите професионалисти</h3></div>
    <br />

<div class="container">

  <p><h3>Моля, изберете процедура:</h3></p>
  <form method="POST" action="{{ url('savevote') }}">
    {{ csrf_field() }}

    <label class="radio-inline">
      <input type="radio" name="p__choice" value="Фризьорски услуги">Фризьорски услуги
    </label>
    <label class="radio-inline">
      <input type="radio" name="p__choice" value="Маникюр">Маникюр
    </label>
    <label class="radio-inline">
      <input type="radio" name="p__choice" value="Педикюр">Педикюр
    </label>


    <div id="hairstyle" style="display: none">
    <h4>Изберете фризьор:</h4>
    @foreach($employees as $employee)
      @if($employee->emp_procedure_type == 1)
      <hr>
      <p><br />

        <img class="img-rounded" src="{{$employee->emp_picture }}">

        <label class="radio-inline">
          <input type="radio" name="e__choice" value="{{$employee->id}}">{{$employee->emp_name}}  -  {{$employee->emp_position}}


      @endif
    @endforeach

    </div>
    <div id="manicure" style="display: none">
      <h4>Изберете маникюрист:</h4>
      @foreach($employees as $employee)
        @if($employee->emp_procedure_type == 2)
        <hr>
        <p><br />

          <img src="{{$employee->emp_picture }}">
          <label class="radio-inline">
            <input type="radio" name="e__choice" value="{{$employee->id}}">{{$employee->emp_name}}  -  {{$employee->emp_position}}

        @endif
      @endforeach
    </div>
    <div id="pedicure" style="display: none">
      <h4>Изберете педикюрист:</h4>
      @foreach($employees as $employee)
        @if($employee->emp_procedure_type == 2)
        <hr>
        <p><br />

          <img src="{{$employee->emp_picture}}">
          <label class="radio-inline">
            <input type="radio" name="e__choice" value="{{$employee->id}}">{{$employee->emp_name}}  -  {{$employee->emp_position}}

        @endif
      @endforeach


    </div>
    <div id="voteRadio" class="well well-sm" style="width:330px; text-align:center;">
    <label class="radio-inline">
      <input type="radio" name="rating" value="1">1
    </label>
    <label class="radio-inline">
      <input type="radio" name="rating" value="2">2
      </label>
      <label class="radio-inline">
      <input type="radio" name="rating" value="3">3
      </label>
      <label class="radio-inline">
      <input type="radio" name="rating" value="4">4
      </label>
      <label class="radio-inline">
      <input type="radio" name="rating" value="5">5
      </label>
      </div>
<br />
<br />
  <div id="btnSubmit">
    <input type="submit" class="btn btn-success" value="Гласувай" id="btnSubmit">
  </div>
<br />
  </form>
</div>
<script>
$(function selectProcedure() {
  $('#voteRadio').hide();
  //$('#btnSubmit').hide();
    $('input[name="p__choice"]').on('click', function() {

        if ($(this).val() == 'Маникюр') {
            $('#manicure').fadeIn('slow');
            $('#pedicure').hide();
            $('#hairstyle').hide();
            $('#voteRadio').show();

        }
        else if ($(this).val() == 'Фризьорски услуги') {
            $('#hairstyle').fadeIn('slow');
            $('#manicure').hide();
            $('#pedicure').hide();
            $('#voteRadio').show();

        }
        else if ($(this).val() == 'Педикюр') {
            $('#pedicure').fadeIn('slow');
            $('#manicure').hide();
            $('#hairstyle').hide();
            $('#voteRadio').show();
        }
        else {
            $('#textboxes').hide();
        }
    });
});
</script>





@endsection
