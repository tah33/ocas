<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function viewStudents()
    {
        $students = Student::all();
        $pdf = PDF::loadView('students',compact('students'));
        return $pdf->stream('students.pdf');
    }

    public function downloadStudents()
    {
        $students = Student::all();
        $pdf = PDF::loadView('students',compact('students'));
        return $pdf->download('students.pdf');
    }
}
