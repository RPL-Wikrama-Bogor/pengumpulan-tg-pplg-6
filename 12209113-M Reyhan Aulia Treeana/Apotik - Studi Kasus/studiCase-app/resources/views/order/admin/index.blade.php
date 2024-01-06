@extends('layouts.template')

@section('content')
    <div class="my-2 d-flex justify-content-end">
        <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export Data (excel)</a>
    </div>

    <div class="tombol d-flex">
        <form class="d-flex w-25 mb-2" role="search" action="{{ route('admin.search') }}" method="get">
            <input class="form-control me-2" type="date" placeholder="Search" aria-label="Search" name="src_tgl">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        
        {{-- <form action="{{ route('admin.index') }}" method="get"> --}}
        <button class="btn btn-secondary ms-2" type="submit">Clear</button>
        </form>
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
                    <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1}}</td>
                    <td>{{ $order->name_customer }}</td>
                    <td>
                        <ol>
                            @foreach ($order['medicines'] as $medicine)
                                <li>
                                    {{ $medicine['name_medicine'] }}
                                    (Rp. {{ number_format($medicine['price'], 0, ',', '.') }}) :
                                    Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}
                                    <small>qty {{ $medicine['qty'] }}</small>
                                </li>
                            @endforeach
                        </ol>
                    </td>
                    <td>{{ $order['user']['name'] }}</td>
                    @php
                        setlocale(LC_TIME, 'IND');
                    @endphp
                    <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                    <td> <a href="{{ route('admin.download', $order['id']) }}" class="btn btn-secondary"> (.pdf)</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection