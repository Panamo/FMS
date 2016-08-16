@extends('layouts.app')
@section('content')
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        @forelse($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td><a class="btn btn-default" href="{{route('company.show', $company)}}">More Info</a></td>
            <td>
            {{ Form::open(['url' => route('company.destroy', $company)]) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-default')) }}
            {{ Form::close() }}
            </td>
        </tr>
        @empty
            404 Not Found :D
        @endforelse
    </table>
@endsection
