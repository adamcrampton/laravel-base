@extends('layouts.manage')

@section('content')

{{-- Convert Eloquent data to JSON for Tabulator --}}
<script>var tableData = {!! $pageData->toJson() !!};</script>

<p class="lead">
    <a href="{{ url()->current() }}?status=published">Published</a> | <a href="{{ url()->current() }}?status=draft">Draft</a> | <a href="{{ url()->current() }}?status=trash">Trash</a>
</p>

{{-- Display data within this element using Tabulator. --}}
<div id="page-table"></div>

@endsection