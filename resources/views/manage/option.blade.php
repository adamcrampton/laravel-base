@extends('layouts.manage')

@section('content')

<div id="option-table">
    <form method="post" action="" class="form">
    @csrf
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
                <td>{{ $optionValues->option_nice_name }}</td>
                              
                @if (is_array($optionValues->option_value_formatted))
                {{-- Represent arrays as a list with checkbox values --}}
                <td>
                    <div id="{{ $optionValues->option_name }}" class="dropdown item-dropdown" data-modal-json='{"item_name": "{{ $optionValues->option_name }}", "item_nice_name": "{{ $optionValues->option_nice_name }}" }'>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="optionDropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">See options</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-options">
                                @foreach($optionValues->option_value_formatted as $index => $formatted_value)
                                <span class="dropdown-item">
                                    <input type="checkbox" data-dropdownId="{{ $index }}" id="optionDropdownCheck" class="form-check-input" checked>{{ $formatted_value }}
                                </span>
                                @endforeach
                            </div>
                            <hr>
                            <div class="text-center">
                                <button id="addNewMultiItem" type="button" class="btn btn-primary">Add New</button>
                            </div>
                        </div>
                    </div>
                </td>
                @else
                {{-- Otherwise show an input field --}}
                <td>
                    <input type="text" name="{{ $optionValues->uri }}" value="{{ $optionValues->option_value_formatted }}" class="form-control" required>
                </td>
                <td>
                    {{ $optionValues->updated_at }}
                </td>
                @endif
            </tr>
            @endforeach
            <tr>
                <td colspan=3>
                    <button type="submit" class="btn btn-primary float-sm-right">Submit</button>
                </td>
            </tr>
        </tbody>
    </table>
    </form>
</div>

@endsection