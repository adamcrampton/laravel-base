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
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">{{ $pageValues->title }}</h1>
          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{ $pageValues->user->name }}</a>
          </p>
          <hr>
          <!-- Date/Time -->
          <p>Last updated: {{ $lastUpdated }}</p>
          <hr>
          <!-- Lead Image -->
          <img class="img-fluid rounded" src="{{ $pageValues->image_path }}" alt="">
          <hr>
          <!-- Page Content -->
          <p class="lead">{{ $pageValues->content }}</p>
          <hr>
        </div>
        {{-- Sidebar --}}
        @include('includes.sidebar')
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    {{-- Footer --}}
  @include('includes.footer')