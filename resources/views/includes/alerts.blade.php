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