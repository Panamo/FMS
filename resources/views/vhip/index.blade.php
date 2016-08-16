@extends('layouts.app')
@section('content')
    @forelse($vhips as $vhip)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $vhip->letter_code }}</h3>
        </div>
        <div class="panel-body">
            <h4>Submit Date: {{ $vhip->submit_date }}</h4>
            <h4>Expire Date: {{ $vhip->expire_date }}</h4>
            <h4>Total Amount: {{ $vhip->total_amount }}</h4>
            <hr>
            <ul>
            @foreach($vhip->companies as $company)
                <li><a href="{{route('company.show', ['id' => $company['id']])}}">
                    {{ $company['name'] }}: {{ $company['amount'] }}
                </a></li>
            @endforeach
            </ul>
        </div>
    </div>
    @empty
        404 Not Found :D
    @endforelse
@endsection
