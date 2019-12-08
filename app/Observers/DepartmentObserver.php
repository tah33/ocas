<?php

namespace App\Observers;

use App\Department;

class DepartmentObserver
{

    public function created(Department $department)
    {

    }

    public function creating(Department $department)
    {
        $request=app('request');
        if ($request->logo) {
            $file = $request->File('logo');
            $ext  = ($department->slug ? $department->slug : $department->name) . "." . $file->clientExtension();
            $file->storeAs('images/department', $ext);
            $department->logo = $ext;
        }
    }




    public function updated(Department $department)
    {
        //
    }

    public function deleted(Department $department)
    {
        //
    }

    public function restored(Department $department)
    {
        //
    }

    public function forceDeleted(Department $department)
    {
        //
    }
}
