@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5 " >
        @if(Session::get('warning'))
        <div class="alert alert-danger">{{ Session::get('warning') }}</div>
        @endif
        <h1 class="display-4">
            Selamat datang {{ Auth::user()->name }}!
        </h1>


        <hr class="my-4">
        @if(Auth::user()->role == "admin")
        Total Admin: <b>{{ $admin }}</b><br>

        Total Kasir: <b>{{ $kasir }}</b>
        @else
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, porro! Quasi explicabo vel quas ut illum aperiam earum, consectetur harum modi voluptates, tenetur delectus accusantium deleniti, illo qui sapiente repudiandae?
        </p>
        @endif


    </div>
@endsection
