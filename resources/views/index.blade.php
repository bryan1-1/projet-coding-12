@extends('header')

@section('content')
    {{-- @include('layout.preloader') --}}
    @include('navigation')
    @include('slider')
    @include('features')
    @include('work')
    @include('team')
    @include('fact')
    @include('contact')
@endsection