@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <div class="search">
                <form action="" class="d-flex" method="get">
                    <input type="date" name="tanggal" id="" class="form-control" >
                    <button class="btn btn-success ms-3" style="width: 140px">Cari data</button>
                </form>                
            </div>
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover mt-4">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Total Bayar</th>
                <th>Kasir</th>
                <th>Tanggal Beli</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($orders as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item['name_customer'] }}</td>
                    <td>
                        @foreach ($item['medicines'] as $medicine)
                            <ol>
                                <li>
                                    {{ $medicine['name_medicine'] }}({{ number_format($medicine['price'],0,',','.') }}) : Rp. {{ number_format($medicine['sub_price'],0,',','.') }} <small>qty {{ $medicine['qty'] }}</small>
                                </li>
                            </ol>
                        @endforeach
                    </td>
                    <td>Rp. {{ number_format($item['total_price'],0,',','.') }}</td>
                    <td>{{ $item['user']['name'] }}</td>
                    <td>

                    {{-- untuk merubah format tanggal --}}
                        @php
                            setlocale(LC_ALL, 'IND');
                        @endphp
                        {{ Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y') }}</>

                    </td>
                    <td>
                        <a href="{{ route('download', $item['id']) }}" class="btn btn-secondary">Download Setruk</a>
                    </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center-end">
        @if ($orders->count())
            {{ $orders->links() }}
        @endif
    </div>
@endsection