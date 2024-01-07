@extends('layouts.template')

@section('content')
<div class="container mt-3">
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
    <br>

    <table class="table table-stripped table-bordered table-hover">
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
            @foreach($orders as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item['name_customer'] }}</td>
                    <td>
                
                            @foreach($item['medicines'] as $medicine)
                            <ol>
                                <li>
                                    {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'], 0, ',', '.') }} ):
                                    Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }} <small>qty {{ $medicine['qty'] }}</small>
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
            {{$orders->links() }}
        @endif
    </div
@endsection