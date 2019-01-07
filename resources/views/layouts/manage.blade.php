@include('includes.head')
  <body {{ isset($modelName) ? 'data-model-name='.strtolower($modelName) : '' }}>
  {{--  Errors and alerts --}}
  @include('includes.alerts')
    {{-- Navigation --}}
    @include('includes.nav')
    {{-- Page Content --}}
    <div class="container">
      <div class="row">
        <!-- Page Content Column -->
        <div class="col-lg-12">
          <!-- Title -->
          <h1 class="mt-4">{{ $pageTitle }}</h1>
          <hr>
          <!-- Page Content -->
          @isset($pageIntro)
            <p class="lead">{!! $pageIntro !!}</p>
          @endisset
          @yield('content')
          <hr>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    {{-- Modals --}}
    @include('includes.manage-modals')
    {{-- Footer --}}
  @include('includes.footer')