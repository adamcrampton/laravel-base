@include('includes.head')
  <body {{ isset($modelName) ? 'data-model-name='.strtolower($modelName) : '' }}>
  {{--  Errors and alerts --}}
  @include('includes.alerts')
    {{-- Page Content --}}
    <div class="container">
      <div class="row">
        <!-- Page Content Column -->
        <div class="col-lg-12">
          @yield('content')
          <hr>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    {{-- Footer --}}
  @include('includes.footer')