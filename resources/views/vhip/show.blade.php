@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{ $vhip->letter_code }}</h3>
    </div>
    <div class="panel-body">
        <dl>
            <dt>Expire Date</dt>
            <dd>{{ date('Y/m/d', strtotime($vhip->expire_date)) }}</dd>
            <dt>Submit Date</dt>
            <dd>{{ date('Y/m/d', strtotime($vhip->submit_date)) }}</dd>
            <dt>Total Amount</dt>
            <dd>{{ $vhip->total_amount }}</dd>
        </dl>
        <div class="list-group">
            @foreach($vhip->companies as $company)
            <a class="list-group-item" href="{{route('company.show', ['id' => $company['id']])}}">
                {{ $company['name'] }} - Amount: {{ $company['amount'] }}
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
