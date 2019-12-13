<?php

namespace App\Http\Controllers;

use App\Exports\QuestionExport;
use App\Exports\QuestionsExport;
use App\Exports\SubjectsExport;
use App\Imports\QuestionsImport;
use App\Imports\StudentsImport;
use App\Imports\DepartmentsImport;
use App\Imports\SubjectsImport;
use App\Subject;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Exports\DepartmentsExport;
use App\Exports\TestsExport;
use App\Imports\TestsImport;
use Maatwebsite\Excel\Facades\Excel;
use Toastr;
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

    public function departmentsImport()
    {
        $date = Date('Y-m-d');
        Excel::import(new departmentsImport, request()->file('file'));
        Toastr::success('departments Are Uploaded Successfully');
        return back();
    }

    public function subjectsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new SubjectsExport, "subjects-{$date}.xlsx");
    }

    public function questionExport($id)
    {
        $subject = Subject::find($id);
        $date = Date('Y-m-d');
        return Excel::download(new QuestionExport($id), "{$subject->name}-Questions.xlsx");
    }

    public function questionsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new QuestionsExport, "Questions-{$date}.xlsx");
    }

    public function questionsImport($id)
    {
        $date = Date('Y-m-d');
        Excel::import(new QuestionsImport($id), request()->file('file'));
        Toastr::success('Questions Are Uploaded Successfully');
        return back();
    }

    public function subjectsImport()
    {
        $date = Date('Y-m-d');
        Excel::import(new SubjectsImport(), request()->file('file'));
        Toastr::success('Subjects Are Uploaded Successfully');
        return back();
    }

    public function studentsImport()
    {
        $date = Date('Y-m-d');
        Excel::import(new StudentsImport(), request()->file('file'));
        Toastr::success('Students Info Are Uploaded Successfully');
        return back();
    }

    public function testsExport()
    {
        $date = Date('Y-m-d');
        return Excel::download(new TestsExport, "tests-{$date}.xlsx");
    }

    public function testsImport()
    {
        $date = Date('Y-m-d');
        Excel::import(new TestsImport(), request()->file('file'));
        Toastr::success('Test Results Are Uploaded Successfully');
        return back();
    }
}
