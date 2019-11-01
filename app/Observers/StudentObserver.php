<?php

namespace App\Observers;

use App\Http\Requests\Register;
use App\Student;
use Imagick;
class StudentObserver
{
    protected $request;

    public function __construct(Register $request)
    {
        $this->request = $request;
    }
    public function created(Student $student)
    {
        //
    }
    public function creating(Student $student)
    {
        if ($this->request->hasFile('image')) {
            $filename= $student->username . '.' .$this->request->image->clientExtension();
            $this->request->file('image')->storeAs('images',$filename);
            $student->image=$filename;
        }
    }

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
