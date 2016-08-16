@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $company->name }}</h3>
        </div>
        <div class="panel-body">
            {{ $company->address }}
            <hr>
            <ul>
            @foreach($company->phones as $phone)
                <li> {{ $phone }} </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
