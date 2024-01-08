@extends('layouts.template')

@section('content')
<div class="jumbotrom py-4 px-5">
    @if(Session::get('check'))
        <div class="alert alert-danger">{{ Session::get('check')}}</div>
    @endif
    <h1 class="display-4">
        Selamat Datang {{ Auth::user()->name }}!
    </h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data Obat,
        penyetoran,juga pembelian (kasir).</p>
</div>
    
@endsection