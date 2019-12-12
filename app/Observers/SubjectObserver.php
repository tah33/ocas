<?php

namespace App\Observers;

use App\Subject;

class SubjectObserver
{

    public function created(Subject $subject)
    {
        //
    }

    public function creating(Subject $subject)
    {
        $request=app('request');
        if ($request->logo) {
            $file = $request->File('logo');
            $ext  = ($subject->slug ? $subject->slug : $subject->name) . "." . $file->clientExtension();
            $file->storeAs('images/subjects', $ext);
            $subject->logo = $ext;
        }
    }


    public function deleted(Subject $subject)
    {
        //
    }

    public function restored(Subject $subject)
    {
        //
    }

    public function forceDeleted(Subject $subject)
    {
        //
    }
}
