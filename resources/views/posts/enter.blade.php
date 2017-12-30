@extends('layouts.master')

@section('content')


        @include('welcome.navbar')

        <div class="container">

            <h1>Enter Your PIN</h1>
            
            @include('partials.success')

            @include('partials.error')
                <div class="form-group col-lg-6">
                            <label for="name">PIN <span>*</span></label>
                            <input  class="form-control" type="hidden" name="random" id="name" value="{{ $pin_id }}" required>
                </div>

                <hr>
            <div class="form-group col-lg-2">
                <input class="btn btn-block btn-submit" type="submit" name="submit" value="Submit">
                &nbsp;
            </div>

            
        </div>

        @include('pages.footer')
        
@endsection