@extends('layouts.master')

@section('title')
    Metrobasicmaths Post Question
@endsection

@section('content')

        @include('pages.navbar')

        @include('pages.banner')

        @include('pages.feature')

        @include('pages.origanisation')
        
        {{--  @include('pages.workshop')  --}}

        @include('pages.member')

        @include('pages.testimonial')

        @include('pages.courses')

        {{--  @include('pages.pricing')  --}}

        @include('pages.contact')

        @include('pages.footer')

@endsection