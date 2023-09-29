<?php

namespace App\Exports;
use App\User;
use Auth;
use App\Models\PackDiagnosisLogs;
use Maatwebsite\Excel\Concerns\FromCollection;

class DiagnosisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $code = Auth::user()->serverip;
        return PackDiagnosisLogs::where('packagecode',$code)->where( 'created_at', '>', Carbon::now()->subDays(40))->paginate(15);
    }
}
