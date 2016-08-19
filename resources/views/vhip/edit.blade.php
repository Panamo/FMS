@extends('layouts.app')
@section('content')
{!! Form::open(['url' => route('vhip.update', $vhip)]) !!}
    <div class="form-group">
        <label for="letter_code">Letter Code</label>
        <input class="form-control" type="text" id="letter_code" name="letter_code" value="{{ $vhip->letter_code }}">
    </div>
    <div class="form-group">
        <label for="submit_date">Submit Date</label>
        <input class="form-control" type="date" id="submit_date" name="submit_date" value="{{ date('Y/m/d', strtotime($vhip->submit_date))  }}">
    </div>
    <div class="form-group">
        <label for="expire_date">Expire Date</label>
        <input class="form-control" type="date" id="expire_date" name="expire_date" value="{{ date('Y/m/d', strtotime($vhip->expire_date))  }}">
    </div>
    <div class="form-group">
        <label for="total_amount">Total Amount</label>
        <input class="form-control" type="text" id="total_amount" name="total_amount" value="{{ $vhip->total_amount }}">
    </div>
    <div class="form-group">
        <label for="tracking_code">Tracking Code</label>
        <input class="form-control" type="text" id="tracking_code" name="tracking_code" value="{{ $vhip->tracking_code }}">
    </div>
    <hr>
    <div id="vhip-company-div">
        <div class="form-group">
            <label for="sub_companies">Sub Companies</label>
            @foreach($vhip->companies as $scompany)
                <select name="sub_companies[]" class="form-control">
                    @foreach($companies as $company)
                    <option {{ $scompany['id'] == $company->_id ? 'selected' : '' }} value="{{ $company->_id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            @endforeach
            <template v-for="i in n">
                <select name="sub_companies[]" class="form-control">
                    @foreach($companies as $company)
                    <option value="{{ $company->_id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </template>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            @foreach($vhip->companies as $company)
                <input type="text" id="amount" class="form-control" name="amounts[]" value="{{ $company['amount'] }}">
            @endforeach
            <template v-for="i in n">
                <input type="text" id="amount" class="form-control" name="amounts[]">
            </template>
        </div>
        <button type="button" class="btn btn-default" v-on:click="addCompany">+</button>
        <button type="button" class="btn btn-default" v-on:click="removeCompany">-</button>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
{!! Form::close() !!}
@endsection
