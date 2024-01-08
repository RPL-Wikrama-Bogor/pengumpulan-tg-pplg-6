<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrdersExport implements FromCollection, WithHeadings, withMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() // mengambil data terkait
    {
        return Order::with('user')->get();
    }

    public function headings(): array //nama colom di excel
    {
        return [
            "Nama Pembeli", "obat", "Total Bayar", "Kasir", "Tanggal"
        ];
    }

    public function map($item): array // mapping data lalu di tentukan value dari colom tersebut
    {
        $dataObat = '';
        foreach ($item->medicines as $value){
            $format = $value["name_medicine"] . " (qty  " . $value['qty'] . " : Rp. " . number_format($value['sub_price']) . "),";
            $dataObat .= $format;
        }
        return [ 
            $item->name_customer,
            $dataObat,
            $item->total_price,
            $item->user->name,
            \Carbon\Carbon::parse($item->created_at)->isoFormat($item->created_at),
    ];
    }
}
