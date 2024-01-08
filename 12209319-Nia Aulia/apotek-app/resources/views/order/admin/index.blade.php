@extends('layouts.template')

@section('content')
    <div class="my-4 d-flex justify-content-between">
        <div class="col-md-6">
            <form action="{{ route('order.index') }}" method="GET">
                <div class="input-group">
                    <input type="date" name="tanggal_filter" id="tanggal_filter" value="{{ request('tanggal_filter') }}" class="form-control">
                    <button type="submit" class="btn btn-info">Cari Data</button>
                    @if(request('tanggal_filter'))
                        <a href="{{ route('kasir.order.index') }}" class="btn btn-secondary">Clear</a>
                    @endif
                </div>
            </form>
        </div>
        <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export Data (excel)</a>
    </div>
    <table class="table table-stipped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Kasir</th>
                <th>tanggal Pembelian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
              <tr>
                {{--menampilkan angka urutan berdasarkan page pagination (digunkana ketika mengambil data dengan paginate/
                    simplePaginate) --}}
                    <td>{{ ($orders->currentpage(-1)) * $orders->perpage() + $loop->index + 1 }}</td>
                    <td>{{ $order->name_customer }}</td>
                    <td>
                        {{-- nested loop :didalam looping ada looping ---}}
                        {{-- 1. nama obat (Rp. 3000) : Rp. 15000 qty 5 --}}
                        <ol>
                        @foreach ($order['medicines'] as $medicine)
                            <li>
                                {{ $medicine['name_medicine'] }}
                                ( Rp. {{ number_format($medicine['price'], 0, ',', '.') }} ) :
                                Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}
                                <small>qty {{ $medicine['qty'] }}</small></li>
                        @endforeach
                        </ol>
                    </td>
                    <td>{{ $order['user']['name'] }}</td>
                    {{-- carbon : package bawaan laravel untuk mengatur hal2 yg berkaitan dengan tipe data date/datetime --}}
                    @php
                    // setting lokal time sebagai wilayah indonesia
                        setlocale(LC_ALL, 'IND');
                    @endphp
                    <td>{{ Carbon\carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                    <td> <a href="{{ route('order.download', $order['id']) }}" class="btn btn-secondary">Unduf (.pdf)</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
