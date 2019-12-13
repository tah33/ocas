<?php

namespace App\Exports;

use App\Test;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TestsExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $tests = DB::table('tests')->select('student_id','ans','marks','common','common_marks')->get();
        return $tests;
    }

    public function headings(): array
    {
        return ["Student_id",'Major', "Marks",'Common','Common Marks'];
    }
}
