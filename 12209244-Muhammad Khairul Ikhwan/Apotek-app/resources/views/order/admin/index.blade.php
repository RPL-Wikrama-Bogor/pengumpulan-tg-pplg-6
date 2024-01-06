@extends('layouts.template')

@section('content')
    <div class="my-5 d-flex justify-content-between">
        <form class="d-flex" method="GET" style="width: 350px; display:flex; margin-bottom: -5px;">
            <input class="form-control me-2" type="date" placeholder="Search" name="date" aria-label="Search">
            <button class="btn btn-info me-2" type="submit">Search</button>
            <button class="btn btn-secondary" type="submit">Clear</button>
        </form>
        <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export Data (excel)</a>
    </div>
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Kasir</th>
                <th>Tanggal Pembelian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                {{-- menampilkan angka urutan berdasarkan page pagination (digunakan ketika mengambil data dengan paginate/simplePaginate) --}}
                <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1 }}</td>
                <td>{{ $order->name_costumer }}</td>
                <td>
                    {{-- nested loop : didalam looping ada looping --}}
                    {{-- karna column medicines tipe datanya berbentuk array json, maka untuk mengaksesnya perlu di looping jg --}}
                    <ol>
                    @foreach ($order['medicines'] as $medicine)
                        <li>
                            {{-- hasil yg diinginkan --}}
                            {{-- 1. nama obat (Rp. 3000) : Rp. 15000 qty 5 --}}
                            {{ $medicine['name_medicine'] }}
                            ( Rp. {{ number_format($medicine['price'], 0, ', ', '.') }})
                            Rp. {{ number_format($medicine['sub_price'], 0, ', ', '.') }}
                            <small>qty{{ $medicine['qty'] }}</small></li>
                    @endforeach
                    </ol>
                </td>
                <td>{{ $order['user']['name'] }}</td>
                {{-- carbon : package bawaan laravel untuk mengatur hal2 yg berkaitan dengan tipe data date/datetime --}}
                @php
                // setting lokal time sebagai wilayah indonesia
                    setlocale(LC_ALL, 'IND');
                @endphp
                <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                <td> <a href="{{ route('order.export-excel', $order['id']) }}" class="btn btn-secondary">Unduh (.pdf)</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection