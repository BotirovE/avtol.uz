<!DOCTYPE html>
<html  ng-app="app" lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','Avtol.uz')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- links -->
  <link rel="shortcut icon" href="{{ asset('img/title.png') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- scripts -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  
</head>
<body ng-controller="cart">
<<<<<<< HEAD
  @yield('scripts');
=======
 {{--  <script type="text/javascript">
    var accum = @json($accum).data;
    var accumBrand = @json($accumBrand);
    var carBrand = @json($carBrand);
  </script> --}}
  <script type="text/javascript" src="{{ asset('js/data.json') }}"></script>
>>>>>>> 24edf9fa7afd30a9553ce59be02209404b915e3e
  <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
  <div id="app">
    <div class="container-fluid">
      <div class="row">
        @include('partials.navbar')
          @yield('content')
        @include('partials.footer')
      </div>
    </div>
  </div>
<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>