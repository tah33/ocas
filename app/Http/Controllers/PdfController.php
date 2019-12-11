<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Controllers\Controller;
use App\Question;
use App\Student;
use App\Subject;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function viewStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students',compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("students-{$date}.pdf");
    }

    public function downloadStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students',compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->download("students-{$date}.pdf");
    }

    public function viewBlockedStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::onlyTrashed()->get();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students',compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("students-{$date}.pdf");
    }

    public function downloadBlockedStudents()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $students = Student::onlyTrashed()->get();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.students',compact('students'))->setPaper($customPaper, 'landscape');
        return $pdf->download("students-{$date}.pdf");
    }

    public function viewdepartment()
    {
        $departments = Department::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.department',compact('departments'));
        return $pdf->stream("departments-{$date}.pdf");
    }

    public function downloaddepartment()
    {
        $departments = Department::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.department',compact('departments'));
        return $pdf->download("departments-{$date}.pdf");
    }

    public function viewSubject()
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subjects = Subject::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.subject',compact('subjects'));
        return $pdf->stream("subjects-{$date}.pdf");
    }

    public function downloadSubject()
    {
        $subjects = Subject::all();
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.subject',compact('subjects'));
        return $pdf->download("subjects-{$date}.pdf");
    }

    public function viewQuestion($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subject = Subject::find($id);
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.question',compact('subject'))->setPaper($customPaper, 'landscape');
        return $pdf->stream("{$subject->name}-questions-{$date}.pdf");
    }

    public function downloadQuestion($id)
    {
        $customPaper = array(0, 0, 792.00, 1300.00);
        $subject = Subject::find($id);
        $date = date('Y-M-d');
        $pdf = PDF::loadView('pdf.question',compact('subject'))->setPaper($customPaper, 'landscape');
        return $pdf->download("{$subject->name}-questions-{$date}.pdf");
    }
}
