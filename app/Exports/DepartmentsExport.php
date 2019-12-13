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
    	$subjects = [];
        $departments = Department::selectRaw('name,slug,minimum,subject_id,marks')->get();
        foreach ($departments as $key => $department) {
        	$subjects[] = $department->subject->name;
        }
        return $departments;
    }

    public function headings(): array
    {
        return ["Name", "Short Name",'Minimum Marks Required','Major Subject','Require Marks'];

    }
}
