<?php

namespace App\Exports;

use App\Student;
use Illuminate\Database\Query\Builder;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection , WithHeadings
{
    use Exportable;

    public function collection()
    {
        $students = DB::table('students')->select('name','username','email','phone','dob','gender','address')->get();
        return $students;
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function headings(): array
    {
        return ["Name", "Username", "Email","Phone","Date of Birth","Gender",'Address'];
    }
}
