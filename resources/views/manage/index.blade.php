@extends('layouts.manage')

@section('content')

<ul>
  @foreach ($menu as $route => $label)
  <li>
    <a href="{{ route($route) }}">{{ $label }}</a>
  </li>
  @endforeach
</ul>  
@endsection