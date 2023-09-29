<?php

namespace App\Exports;

use App\Models\PackDiagnosisLogs;
use Illuminate\Maatwebsite\Excel\Concerns\FromCollection;

class DiagnosisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PackDiagnosisLogs::all();
    }
}
