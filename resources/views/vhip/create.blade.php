@extends('layouts.app')
@section('content')
{!! Form::open(['url' => route('vhip.store')]) !!}
    <div class="form-group">
        <label for="letter_code">Letter Code</label>
        <input class="form-control" type="text" id="letter_code" name="letter_code" placeholder="Letter Code">
    </div>
    <div class="form-group">
        <label for="submit_date">Submit Date</label>
        <input class="form-control" type="date" id="submit_date" name="submit_date">
    </div>
    <div class="form-group">
        <label for="expire_date">Expire Date</label>
        <input class="form-control" type="date" id="expire_date" name="expire_date">
    </div>
    <div class="form-group">
        <label for="total_amount">Total Amount</label>
        <input class="form-control" type="text" id="total_amount" name="total_amount" placeholder="Total Amount" v-model="value" number>
    </div>
    <div class="form-group">
        <label for="rem_amount">Reminded Amount</label>
        <p class="form-control-static" id="rem_amount">@{{value}}</p>
    </div>
    <div class="form-group">
        <label for="tracking_code">Tracking Code</label>
        <input class="form-control" type="text" id="tracking_code" name="tracking_code" placeholder="Tracking Code">
    </div>
    <hr>
    <div id="vhip-company-div">
        <div class="form-group">
            <label for="sub_companies">Sub Companies</label>
            <template v-for="i in n">
                <select name="sub_companies[]" class="form-control">
                    @foreach($companies as $company)
                    <option value="{{$company->_id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </template>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <template v-for="i in n">
                <input type="text" id="amount" class="form-control" name="amounts[]" v-model="values">
            </template>
        </div>
        <button type="button" class="btn btn-default" v-on:click="addCompany">+</button>
        <button type="button" class="btn btn-default" v-on:click="removeCompany">-</button>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
@endsection
