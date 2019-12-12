<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
use Carbon\Carbon;
class StudentsImport implements ToModel
{

    public function model(array $row)
    {
        $student = new Student();
        $student->name = $row[0];
        $student->username = $row[1];
        $student->email = $row[2];
        $student->password = Hash::make('1234');
        $student->phone = $row[3];
        $student->dob = $row[4];
        $student->gender = $row[5];
        $student->address = $row[6];
        return $student;
    }
}
