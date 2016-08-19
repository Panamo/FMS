@extends('layouts.app')
@section('content')
{!! Form::open(['url' => route('company.update', $company)]) !!}
    {{ Form::hidden('_method', 'PUT') }}
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ $company->name }}">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select name="type" id="type" class="form-control">
            <option value="register">Register</option>
            <option value="clone">Clone</option>
        </select>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="4" cols="40">{{ $company->address }}</textarea>
    </div>
    <div id="company-telephone-div" class="form-group">
        <label for="telphone">Telephone</label>
        @foreach($company->phones as $phone)
        <input class="form-control" type="text" id="telephone" name="telephones[]" value={{ $phone }}>
        @endforeach
        <template v-for="i in n">
            <input class="form-control" type="text" id="telephone" name="telephones[]">
        </template>
        <button type="button" class="btn btn-default" v-on:click="addPhone" name="button">+</button>
        <button type="button" class="btn btn-default" v-on:click="removePhone" name="button">-</button>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
{!! Form::close() !!}
@endsection
