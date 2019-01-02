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
            @foreach($optionData as $key => $optionValues)
            <tr>
                {{-- Note: Implode any arrays to a comma separated list  --}}
                <td>{{ $optionValues->option_nice_name }}</td>
                <td>{{ is_array($optionValues->option_value_formatted) ? implode(', ', $optionValues->option_value_formatted) : $optionValues->option_value_formatted }}</td>
                <td>{{ $optionValues->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection