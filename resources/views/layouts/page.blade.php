<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/venobox/venobox.css') }}">
    
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/manage.css') }}">

    <title>@yield('title')</title>
  </head>
  <body {{ isset($modelName) ? 'data-model-name='.strtolower($modelName) : '' }}>

    @if ($errors->any())
    <div class="alert alert-danger alert-top" role="alert">
        <p>Error detail lead text:</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @elseif (session()->has('warning'))
    <div class="alert alert-warning alert-top alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {!! session()->get('warning') !!}
    </div>
    @elseif (session()->has('success'))
    <div class="alert alert-success alert-top alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {!! session()->get('success') !!}
    </div>
    @endif
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('manage') ? 'active' : '' }}" href="/manage">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    @if (session('status'))
      <div class="card-body">
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
      </div>
    </div>
    @endif
    <div class="container container__main-container">
      <!-- Page Content -->
      <div class="col-lg-12 clearfix">
        <div class="mt-5 float-md-left">
        <h1>{{ isset($pageTitle) ? $pageTitle : '' }}</h1>
        @if (isset($introText))
        <p>{{ $introText }}</p>
        @endif
        </div>
      </div>
      @yield('content')
    </div> 
    <!-- Vendor JS -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/jqueryui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>

    <!-- App Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/page.js') }}"></script>
  </body>
</html>