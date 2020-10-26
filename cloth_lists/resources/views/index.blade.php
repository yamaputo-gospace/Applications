@extends('layout.layout')

@section('link')
<link rel="stylesheet" href="{{ asset('style/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('style/nav_style.css') }}">
@endsection

@include('layout.header')

@include('layout.nav')

@include('layout.main.index')

@include('layout.footer')