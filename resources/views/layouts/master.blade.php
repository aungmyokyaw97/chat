<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Backend - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('layouts.header')
      @include('layouts.sidebar')
      <div class="content-wrapper">
        <section class="content-header">
          <h1>@yield('title')<small>...</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">@yield('title')</li>
          </ol>
        </section>
        @yield('content')
      </div>
        @include('layouts.footer')
      </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/adminlte.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
  </body>
</html>
