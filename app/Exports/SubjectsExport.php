<?php

namespace App\Exports;

use App\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubjectsExport implements FromCollection , WithHeadings
{
    public function collection()
    {
        $subjects = DB::table('subjects')->select('name','slug')->get();
        return $subjects;
    }

    public function headings(): array
    {
        return ["Name", "Short Name"];
    }
}
