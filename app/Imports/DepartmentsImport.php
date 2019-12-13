<?php

namespace App\Imports;

use App\Department;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DepartmentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $department               = new Department;
        $department->name   = $row['name'];
        $department->slug     = $row['short_name'];
        $department->minimum      = $row['minimum_marks_required'];
        $department->subject_id      = $row['major_subject'];
        $department->marks      = $row['required_marks'];
        return $department;
    }
}
