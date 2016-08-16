@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <tr>
        </tr>
        @forelse($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td><a class="btn btn-default" href="{{route('company.show', $company)}}">More Info</a></td>
        </tr>
        @empty
            404 Not Found :D
        @endforelse
    </table>
@endsection
