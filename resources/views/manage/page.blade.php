@extends('layouts.manage')

@section('content')
<p class="lead">
    <a href="{{ url()->current() }}?status=published">Published</a> | <a href="{{ url()->current() }}?status=draft">Draft</a> | <a href="{{ url()->current() }}?status=trash">Trash</a>
</p>

@endsection