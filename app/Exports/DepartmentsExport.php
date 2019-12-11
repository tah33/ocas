<?php

namespace App\Exports;

use App\Department;
use Illuminate\Database\Query\Builder;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DepartmentsExport implements FromCollection , WithHeadings
{
    public function collection()
    {
        $departments = DB::table('departments')->select('name','slug')->get();
        return $departments;
    }

    public function headings(): array
    {
        return ["Name", "Short Name"];

    }
}
