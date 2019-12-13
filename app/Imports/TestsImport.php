<?php

namespace App\Imports;

use App\Test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TestsImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $test         = new Test;
        $test->student_id   = $row['student_id'];
        $test->ans   = $row['major'];
        $test->marks   = $row['marks'];
        $test->common   = $row['common'];
        $test->common_marks   = $row['common_marks'];
        return $test;
    }
}
