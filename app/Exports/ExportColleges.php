<?php

namespace App\Exports;

use App\Models\Colleges;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCollege implements FromCollection
{
    public function collection()
    {
        return Colleges::get();
    }
}