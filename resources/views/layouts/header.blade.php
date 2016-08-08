<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="description" content="BMS">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>
    FMS @yield('title')
</title>

{!! Html::style('css/app.css') !!}

</head>
<body style="padding-bottom: 100px;">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">FMS</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('vhip.create')}}">VHIP</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
