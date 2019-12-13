<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
use Carbon\Carbon;
class StudentsImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        $student = new Student();
        $student->name = $row['name'];
        $student->username = $row['username'];
        $student->email = $row['email'];
        $student->password = Hash::make('1234');
        $student->phone = $row['phone'];
        $student->dob = $row['date_of_birth'];
        $student->gender = $row['gender'];
        $student->address = $row['address'];
        return $student;
    }
}
