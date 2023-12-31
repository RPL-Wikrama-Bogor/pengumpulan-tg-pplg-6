@extends('layouts.template')
@section('content')
    <div class="my-5 d-flex justify-content-between">
        <div class="search">
            <form action="" class="d-flex" method="get">
                <input type="text" name="tanggal" id="" class="form-control" >
                <button class="btn btn-success ms-3" style="width: 140px">Cari data</button>
            </form>                
        </div>
        <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export Data (excel)</a>
    </div>
    
        <table class="table stripped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Kasir</th>
                    <th>Tanggal Pembeli</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ ($orders->currentpage() -1)*$orders->perpage() + $loop->index + 1 }}</td>
                        <td>{{ $order->name_customer }}</td>
                        <td>
                            <ol>
                                @foreach ($order['medicines'] as $medicine)
                                    <li>
                                        {{ $medicine['name_medicine'] }}
                                        (Rp. {{ number_format($medicine['price'], 0,',','.') }}) :
                                        Rp. {{ number_format($medicine['sub_price'], 0,',','.') }}
                                        <small>qty {{ $medicine['qty'] }}</small>
                                    </li>
                                @endforeach
                            </ol>
                        </td>
                        <td>{{ $order['user']['name'] }}</td>
                        @php
                            setlocale(LC_ALL, 'IND');
                        @endphp
                        <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                        <td><a href="{{ route('download' , $order['id'] )}}" class="btn btn-secondary">Unduh (.pdf)</a></td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
@endsection