<?php

namespace App\Http\Controllers;

use App\Exports\QuestionExport;
use App\Exports\QuestionsExport;
use App\Exports\SubjectsExport;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Exports\DepartmentsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function studentsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new StudentsExport, "students-{$date}.xlsx");
    }

    public function departmentsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new DepartmentsExport, "departments-{$date}.xlsx");
    }

    public function subjectsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new SubjectsExport, "subjects-{$date}.xlsx");
    }

    public function questionExport($id)
    {
        $date = Date('Y-m-d');
        return Excel::download(new QuestionExport($id), "subjects-{$date}.xlsx");
    }

    public function questionsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new QuestionsExport, "subjects-{$date}.xlsx");
    }
}
