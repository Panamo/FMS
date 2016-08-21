@extends('layouts.app')
@section('content')
{!! Form::open(['url' => route('sell.store')]) !!}
    <div>
		<label for="company">Company</label>
        <select name="company">
            @foreach($companies as $company)
            <option value={{ $company->_id }}>{{ $company->name }}</option>
            @endforeach
        </select>	
	</div>
	<hr>
	<div>
		<p> بسته ها </p>
        <label for="size">اندازه</label><input type="text" id="size" name="size">
        <label for="amount">تعداد</label><input type="text" id="amount" name="amount"><button type="button" name="plus_button">+</button>
    </div>
	<hr>
	<div>
		<label for="vahed_price">قیمت واحد</label><input type="text" id="vahed_price" name="vahedP">
		<label for="kol_price">قیمت کل</label><input type="text" id="kol_price" name="kolP">
	</div>
	<hr>
	<div>
        <label for="total_mass">وزن کل</label><input type="text" id="total_mass" name="massT">
        <label for="date">تاریخ</label><input type="date" id="date" name="date">
    </div>

{!! Form::close() !!}
@endsection
