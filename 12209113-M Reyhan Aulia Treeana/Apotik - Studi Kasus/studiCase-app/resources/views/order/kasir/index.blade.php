@extends('layouts.template')

@section('content')
<div class="">
    
</div>
    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
        </div>
    </div>

    <div class="tombol d-flex">
        <form class="d-flex w-25 mb-2" role="search" action="{{ route('kasir.order.search') }}" method="get">
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="src">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        
        <form action="{{ route('kasir.order.index') }}">
        <button class="btn btn-secondary ms-2" type="submit">Clear</button>
        </form>
    </div>
    

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Total Bayar</th>
                <th>Kasir</th>
                <th>Tanggal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($orders as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item['name_customer'] }}</td>
                    <td>
                        @foreach ($item['medicines'] as $medicine)
                        <ol>
                            <li>
                                {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'],0,',', '.') }} ) : Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }} <small>qty {{ $medicine['qty'] }}</small>
                            </li>
                        </ol>
                        @endforeach
                    </td>
                    <td>Rp. {{ number_format($item['total_price'], 0, ',', '.') }}</td>
                    <td>{{ $item['user']['name'] }}</td>
                    <td>{{ $item['created_at']->translatedFormat('d F Y') }}</td>
                    <td>
                        <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download Struk</a>
                    </td>
                </tr>  
                @endforeach 
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        @if ($orders->count())
            {{ $orders->links() }}
        @endif
    </div>
    </div>
@endsection