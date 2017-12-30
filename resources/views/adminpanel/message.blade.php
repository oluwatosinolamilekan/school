@extends('layouts.adminmaster')

@section('content')

{{--  @include('adminpages.adminnav')  --}}

{{--  @include('adminpages.adminsidebar')  --}}


    @include('partials.error')
    @foreach($messages as $message)

        <ul class="list-group">
            <li class="list-group-item">Name:{{$message->name}}</li>
            <li class="list-group-item">Email:{{$message->email}}</li>
            <li class="list-group-item">Subject:{{$message->subject}}</li>
            <li class="list-group-item">Message:{{$message->message}}</li>
            
            

        </ul>
    @endforeach
@endsection