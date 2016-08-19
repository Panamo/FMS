@extends('layouts.app')
@section('content')
<table class="table table-scriped table-hover">
    <tr>
        <th>Letter Code</th>
        <th>Submit Date</th>
        <th>Expire Date</th>
        <th>Total Amount</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @forelse($vhips as $vhip)
    <tr>
        <td>{{ $vhip->letter_code }}</td>
        <td>{{ date('Y/m/d', strtotime($vhip->submit_date)) }}</td>
        <td>{{ date('Y/m/d', strtotime($vhip->expire_date)) }}</td>
        <td>{{ $vhip->total_amount }}</td>
        <td><a class="btn btn-default" href="{{route('vhip.show', $vhip)}}">More Info</a></td>
        <td><a class="btn btn-default" href="{{route('vhip.edit', $vhip)}}">Edit</a></td>
        <td>
            {{ Form::open(['url' => route('vhip.destroy', $vhip)]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                <button type="submit" class="btn btn-warning">Delete</button>
            {{ Form::close() }}
        </td>
    </tr>
    @empty
    404 Not Found :D
    @endforelse
    </table>
@endsection
