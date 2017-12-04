@extends('master')
@section('content')


<div class="choose-procedure">

    <div class="test-class">asd</div>

    {{ csrf_field() }}

    <div id="tabs">

        <nav class="selector">

            <div class="heading">
                <h3>Оценка на служител</h3>
            </div>


            <div class="procedure-selector">
        <ul class="menu-tabs">
            <li class="menu-tab"><a href="#hairstyle">Прическа</a></li>
            <li class="menu-tab"><a href="#manicure">Маникюр</a></li>
            <li class="menu-tab"><a href="#pedicure">Педикюр</a></li>
        </ul>
            </div>
        </nav>
        <div class="procedures-holder">
            <div class="procedure" id="hairstyle">

                @foreach($employees as $employee)
                    @if($employee->emp_procedure_type == 1)
                        <div id="{{$employee->id}}" class="employee">

                            <img class="employee-avatar" src="{{$employee->emp_picture }}">


                               <p>{{$employee->emp_name}}</p>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="procedure" id="manicure">


                @foreach($employees as $employee)
                    @if($employee->emp_procedure_type == 2)
                        <div id="{{$employee->id}}" class="employee">
                            <img src="{{$employee->emp_picture }}">

                                <p>{{$employee->emp_name}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="procedure" id="pedicure">

                @foreach($employees as $employee)
                    @if($employee->emp_procedure_type == 2)
                        <div id="{{$employee->id}}" class="employee">


                            <img src="{{$employee->emp_picture}}">

                            <p>{{$employee->emp_name}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <section style="display:none;" class='rating-widget'>
        <div class='rating-stars text-center'>
            <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
            </ul>
        </div>
        <div class="vote-holder">
            <div style="display:none;" class="vote-button btn">Гласувай!</div>
        </div>
    </section>






</div>


@endsection
