@extends('layouts.manage')

@section('content')

{{-- Display data within this element using Tabulator. --}}
<div id="page-table">
    <table class="table">
        <thead>
            <tr>
                <th>Option Name</th>
                <th>Option Value</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            {{dd($optionData)}}
        </tbody>
    </table>
</div>

@endsection