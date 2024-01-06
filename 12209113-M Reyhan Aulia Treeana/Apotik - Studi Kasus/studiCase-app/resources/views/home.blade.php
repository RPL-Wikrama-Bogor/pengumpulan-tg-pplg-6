@extends('layouts.template')

@section('content')
<div class="jumbotron py-4 px-5">
    <h1 class="display-4">
        Selamat Datang {{ Auth::user()->name }}
    </h1>
    @if (Session::get('cannotAccess'))
    <div class="alert alert-danger">{{ Session::get('cannotAccess') }}</div>
    @endif
    <hr class="my-4">
    <p>Aplikasi ini digunakan oleh pegawai apotek sebagai alat untuk mengelola obat, penyetokan, juga pembelian</p>
</div>
@endsection