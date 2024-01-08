<?php

namespace App\Exports;

use App\Models\NamaModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class NamaMigrationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NamaModel::all();
    }
}
