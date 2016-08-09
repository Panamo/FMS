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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VHIP <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('vhip.index')}}">List</a></li>
                        <li><a href="{{route('vhip.create')}}">New</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('company.index')}}">List</a></li>
                        <li><a href="{{route('company.create')}}">New</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
