<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $dataBuku;

    public function __construct($dataBuku)
    {
        $this->dataBuku = $dataBuku;
    }

    public function collection()
    {
        return collect($this->dataBuku);
    }
}