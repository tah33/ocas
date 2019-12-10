<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Student;
use App\User;
use Auth;
class StudentPolicy
{
    use HandlesAuthorization;

    public function viewAny()
    {
        $admin = Auth::guard('admin')->check();
        if ($admin)
            return true;
        return false;
    }

    public function block()
    {
        $admin = Auth::guard('admin')->check();
        if ($admin)
            return true;
        return false;
    }

    public function unblock()
    {
        $admin = Auth::guard('admin')->check();
        if ($admin)
            return true;
        return false;
    }
}
