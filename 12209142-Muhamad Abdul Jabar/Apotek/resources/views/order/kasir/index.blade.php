@extends('layouts.template')

@section('content')
    <div class="container mt-3">
          
            <div class="d-flex justify-content-start mb-3">      
                <form class="d-flex" method="get" >
                <input class="form-control me-2" type="date" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="{{ route('kasir.order.create') }}" class="btn btn-primary" style="margin-left:760px;">Pembelian Baru</a>
                
            </div>
           
       
        <table class="table table-striped table-bordered table-hover">
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
                        {{-- karna column medicines pada table orders bertipe json yang diubah formatnya menjadi array, maka dari itu untuk mengakses/menampilkan item nya perlu menggunakan looping --}}
                            @foreach ($item['medicines'] as $medicine)
                                <ol>
                                    <li>
                                        {{-- mengakses key array assoc dari tiap item array value column medicines --}}
                                        {{ $medicine['name_medicine'] }} ({{ number_format($medicine['price'], 0, ',', '.') }}): Rp. {{ number_format
                                            ($medicine['sub_price'], 0, ',', '.') }} <small>qty {{ $medicine['qty'] }}</small>
                                    </li>
                                </ol>
                            @endforeach
                        </td>
                        <td>Rp. {{ number_format($item['total_price'], 0, ',', '.') }}</td>
                        {{-- karna nama kasir terdapat pada table users, dan relasi antara order dan users telah didefinisikan pada function relasi
                            bernama user. naka, untuk mengakses column pada table users melalui relasi antara keduanya dapat dilakukan dengan $var
                            ['namaFuncRelasi']['columnDariTableLainnya'] --}}
                        <td>{{ $item['user']['name'] }}</td>
                        <td>{{ $item['created_at']->translatedFormat('d F Y') }}</td>
                        <td>
                            <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-primary">Download Setruk</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
        {{-- jika data ada atau --}}
            {{-- Menampilkan pagination jika ada data --}}
            @if ($orders->count())
                {{ $orders->links() }}
            @endif
        </div>
    </div>
@endsection