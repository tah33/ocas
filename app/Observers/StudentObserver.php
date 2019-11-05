<?php

namespace App\Observers;

use App\Student;
class StudentObserver
{

    public function created(Student $student)
    {
        //
    }
    /*public function creating(Student $student)
    {
        $request = app('request');
        if ($request->hasFile('image')) {
            $file=$request->File('image');
            $ext=$request->username. "." .$file->clientExtension();
            $path = public_path(). '/images/';
            $file->move($path,$ext);
            $student->image=$ext;
        }
    }*/

    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the student "deleted" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        //
    }

    /**
     * Handle the student "restored" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the student "force deleted" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
