@extends('layouts.manage')

@section('content')

<ul>
  @foreach ($menu as $label => $route)
  <li>
    <a href="{{ route($route) }}">{{ $label }}</a>
  </li>
  @endforeach
</ul>  
@endsection