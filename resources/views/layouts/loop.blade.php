@include('includes.head')
  <body {{ isset($modelName) ? 'data-model-name='.strtolower($modelName) : '' }}>
  {{--  Errors and alerts --}}
  @include('includes.alerts')
    {{-- Navigation --}}
    @include('includes.nav')
    {{-- Page Content --}}
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
          <!-- Blog Post -->
          @foreach($pageData as $page => $pageValues)
          <div class="card mb-4">
            <img class="card-img-top" src="{{ $pageValues->image_path }}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><a href="{{ route('page.show', ['page' => $pageValues->uri]) }}">{{ $pageValues->title }}</a></h2>
              <p class="card-text">{{ $pageValues->excerpt }}</p>
              <a href="{{ route('page.show', ['page' => $pageValues->uri]) }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on November 20, 2018 by
              <a href="{{ route('author.show', ['author' => $pageValues->user->username]) }}  {{ $pageValues->user->name }}">{{ $pageValues->user->name }}</a>
            </div>
          </div>
          @endforeach
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
        </div>
        {{-- Sidebar --}}
        @include('includes.sidebar')
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    {{-- Footer --}}
  @include('includes.footer')