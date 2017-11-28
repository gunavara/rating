<!doctype html>
<html lang="en">
  <head>
    <title>RefletRating</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="{{ asset('style.css') }}" rel="stylesheet">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="Http://hairstudioreflet.com">Reflet</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="{{URL::to('/')}}">Начало</a></li>
          <li><a href="{{URL::to('/rate')}}">Оценяване</a></li>
          <li><a href="{{URL::to('/results')}}">Резултати</a></li>
        </ul>
      </div>
    </nav>

@yield('content')

</body>
</html>
