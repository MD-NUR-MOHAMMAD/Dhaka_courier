@extends('courier.layout', ['title' => 'Dhaka_Courier'])
@section('head')
    
@endsection
@section('content')
    @include('courier.inc.nav')
    @include('courier.inc.carousel')
    @include('courier.inc.services')
    @include('courier.inc.achievements')
    @include('courier.inc.video')
    @include('courier.inc.testimonial')
    @include('courier.inc.contact')
    @include('courier.inc.address')
    @include('courier.inc.footer')
@endsection
