@extends('layout.layout')

@section('link')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('style/add_style.css') }}">
@endsection

@include('layout.header')

@include('layout.main.add')
 
@include('layout.footer')