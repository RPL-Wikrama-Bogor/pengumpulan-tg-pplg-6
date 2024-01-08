@extends('layouts.template')

@section('content')
<form action="{{ route('login.auth')}}" method="POST" class="card p-5">
    @csrf
    @if (Session::get('failed'))
        <div class="alert alert-danger">{{ Session::get('failed' )}}</div>
    @endif
    @if (Session::get('logout'))
        <div class="alert alert-primary">{{ Session::get('logout' )}}</div>
    @endif
    @if (Session::get('canAccess'))
        <div class="alert alert-danger">{{ Session::get('canAccess' )}}</div>
    @endif

    <div class="mb-3 ">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" autofocus>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3 ">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-success mt-3" >LOGIN</button>
</form>
    
@endsection