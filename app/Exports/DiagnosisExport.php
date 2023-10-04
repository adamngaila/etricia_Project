<?php

namespace App\Exports;
use App\User;
use Auth;
use App\PackDiagnosisLogs;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DiagnosisExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $code = Auth::user()->serverip;
        return PackDiagnosisLogs::where('packagecode',$code)->where( 'created_at', '>', Carbon::now()->subDays(30))->get();
    }
     public function headings(): array
    {
        return [
            'Id',
            'Pack Code',
            'Temp Sensors status',
            'Relays status',
            'Current Sensor status',
            'Voltage Sesnor status',
            'Invetor status',
            'Grid status',
            'Physical condition status',
            'time',
            'time',
        ];
    }
}
