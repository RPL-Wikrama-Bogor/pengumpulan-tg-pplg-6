@extends('layouts.template')

@section('content')
@if (Session::get('failed'))
<div class="alert alert-danger" role="alert">{{ Session::get('failed') }}</div>
@endif
    <div class="container mt-3">
        <form action="{{ route('kasir.order.store') }}" class="card m-auto p-5" method="POST">
            @csrf
            @if ($errors->any())
                <ul class="alert alert-danger p-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if (Session::get('failed'))
                <div class="alert alert-danger">
                    {{ Session::get('failed') }}
                </div>
            @endif

            <p>Penanggung Jawab : <b>{{ Auth::user()->name }}</b></p>

            <div class="mb-3 row">
                <label for="name_customer" class="col-sm-2 col-form-label">Nama Pembeli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_customer" name="name_customer">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="medicines" class="col-sm-2 col-form-label">Obat</label>
                <div class="col-sm-10">
                    {{-- name dibuat array karena nantinya data obat (medicines) akan berbentuk array/data bisa lebih dari satu --}}
                    <select name="medicines[]" id="medicines" class="form-select">
                        <option selected hidden disabled>Pesanan 1</option>
                        @foreach ($medicines as $medicine)
                            <option value="{!! $medicine['id'] !!}">{!! $medicine['name'] !!}</option>
                        @endforeach
                    </select>
                    {{-- div untuk nanti pembungkus select baru yang muncul --}}
                    <div id="wrap-medicines"></div>
                    <br>
                    <p style="cursor: pointer;" class="text-primary" id="add-select"> tambah data</p>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-lg" style="background-color: #153243; color: #16f4d0">Konfirmasi Pembelian</button>
        </form>
    </div>
@endsection

@push('script')
    <script>
        //definisikan no sebagai 2
        let no = 2;
        //ketika tag dengan id add-select diclick jalankan func berikut
        $("#add-select").on("click", function() {
            let el = `<br><select name="medicines[]" id="medicines${no}" class="form-select">
                        <option selected hidden disabled>Pesanan ${no}</option>`;
            @foreach ($medicines as $medicine)
                el += `<option value="{!! $medicine['id'] !!}">{!! $medicine['name'] !!}</option>`;
            @endforeach
            el += `</select>`;
            //append: tambahkan select html dibagian sblm penutup tag penutup terkait (sblm penutup tag idnya wrap-medicines)
            $("#wrap-medicines").append(el);
            // increments variable no agar angka yg muncul di option selalu bertambah 1 sesuai jumlah selectnya
            no++;
        });
    </script>
@endpush