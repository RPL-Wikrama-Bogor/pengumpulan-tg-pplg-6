@extends('layouts.template')

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert-warning">{{ Session::get('deleted') }}</div>
    @endif
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('medicine.home') }}" method="GET">
                    <div class="input-group m-3">
                        <input type="text" name="data" value="{{ request('data') }}" class="form-control" placeholder="Cari...">
                        <button type="submit" class="btn btn-info">Cari Data</button>
                        @if(request('data'))
                            <a href="{{ route('medicine.home') }}" class="btn btn-secondary">Clear</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
       <br>    
    {{-- <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('medicine.home') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="data" id="data" value="{{ request('data') }}" class="form-control">
                        <button type="submit" class="btn btn-info">Cari Data</button>
                        @if(request('data'))
                            <a href="{{ route('medicine.home') }}" class="btn btn-secondary">Clear</a>
                        @endif
                    </div>
                </form>
            </div> --}}
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Tipe</td>
                <td>Harga</td>
                <td>Stok</td>
                <td class="text-center">Aksi</td>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($medicines as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ ucwords($item['type']) }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['stock'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('medicine.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('medicine.delete', $item['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
