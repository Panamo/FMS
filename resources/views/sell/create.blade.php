@extends('layouts.app')
@section('content')
{!! Form::open(['url' => route('sell.store')]) !!}
    <div class="form-group">
		<label for="company">Company</label>
        <select name="company" class="form-control">
            @foreach($companies as $company)
            <option value={{ $company->_id }}>{{ $company->name }}</option>
            @endforeach
        </select>	
	</div>
    <hr>
	<div class="form-group" id="sell-package-div">
        <h4>Packages</h4>
        <label for="size">Size</label>
        <input type="text" id="size" name="size[]" class="form-control">
        <template v-for="i in n">
            <input type="text" id="size" name="size[]" class="form-control">
        </template>
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount[]" class="form-control">
        <template v-for="i in n">
            <input type="text" id="amount" name="amount[]" class="form-control">
        </template>
        <button type="button" class="btn btn-default" v-on:click="addPackage">+</button>
        <button type="button" class="btn btn-default" v-on:click="removePackage">-</button>
    </div>
    <hr>
	<div class="form-group" id="sell-package-div">
        <h4>VHIPs</h4>
        <label for="vhip">VHIP</label>
        <select id="vhip" name="vhip[]" class="form-control">
            @foreach($vhips as $vhip)
            <option value={{ $vhip->_id }}>{{ $vhip->letter_code }}</option>
            @endforeach
        </select>
        <template v-for="i in n">
            <select id="vhip" name="vhip[]" class="form-control">
                @foreach($vhips as $vhip)
                <option value={{ $vhip->_id }}>{{ $vhip->letter_code }}</option>
                @endforeach
            </select>
        </template>
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount[]" class="form-control">
        <template v-for="i in n">
            <input type="text" id="amount" name="amount[]" class="form-control">
        </template>
        <button type="button" class="btn btn-default" v-on:click="addPackage">+</button>
        <button type="button" class="btn btn-default" v-on:click="removePackage">-</button>
    </div>
    <hr>
	<div class="form-group">
        <label for="fee">Fee</label>
        <input type="text" id="fee" name="fee" class="form-control">
        <label for="total_price">Total Price</label>
        <input type="text" id="total_price" name="total_price" class="form-control">
	</div>
	<div class="form-group">
        <label for="total_weight">Total Weight</label>
        <input type="text" id="total_weight" name="total_weight" class="form-control">
        <label for="date">Date</label>
        <input type="date" id="date" name="date" class="form-control">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
@endsection
