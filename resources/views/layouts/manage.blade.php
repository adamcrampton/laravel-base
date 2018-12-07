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
          <h1 class="mt-4">{{ $pageValues->pageTitle }}</h1>
          <hr>
          <!-- Page Content -->
          <p class="lead">{{ $pageValues->pageIntro }}</p>
          <hr>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    {{-- Footer --}}
  @include('includes.footer')