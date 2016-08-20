@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @forelse($companies as $company)
    <tr>
        <td>{{ $company->name }}</td>
        <td>{{ studly_case($company->type) }}</td>
        <td><a class="btn btn-default" href="{{route('company.show', $company)}}">More Info</a></td>
        <td><a class="btn btn-default" href="{{route('company.edit', $company)}}">Edit</a></td>
        <td>
            {{ Form::open(['url' => route('company.destroy', $company)]) }}
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
