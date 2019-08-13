@extends('template.body')
@section('body')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    One To one Relation Database Project
                </div>

                <div class="links">
                    <a href="{{route('user')}}">User list</a>
                    <a href="{{route('creat')}}">Create User</a>
                </div>
            </div>
        </div>
@endsection