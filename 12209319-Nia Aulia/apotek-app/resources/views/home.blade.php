@extends('layouts.template')

<div class="jumbotron py-4 px-5">
    @section('content')
    @if(Session::get ('cannotAccess'))
        <div class="alert alert-danger">{{ Session::get('cannotAccess') }}</div>
    @endif
    <h1 class="display-4">
        Selamat Datang {{ Auth::user()->name }}!
    </h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data obat,
        penyetokan, juga pembelian (kasir).</p>
</div>

@auth 

<div class="row">
    <div class="col-xl col-md-6">
        <div class="card bg-secondary text-white mb-6">
            <div class="card-body">
                Admin
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h2>{{ App\Models\User::where('role', 'admin')->count() }}</h2>
            </div>
        </div>
    </div>
    <div class="col-xl col-md-6">
        <div class="card bg-secondary text-white mb-6">
            <div class="card-body">
                Cashier
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h2>{{ App\Models\User::where('role', 'cashier')->count() }}</h2>
            </div>
        </div>
    </div>
    <div class="col-xl col-md-6">
        <div class="card bg-secondary text-white mb-6">
            <div class="card-body">
               Medicine
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h2>{{ App\Models\Medicine::all('name')->count() }}</h2>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection