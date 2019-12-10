<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Student;
use App\User;
use Auth;
class StudentPolicy
{
    use HandlesAuthorization;

    public function admin()
    {
        $admin = Auth::guard('admin')->check();
        if ($admin)
            return true;
        return false;
    }
    public function viewAny()
    {
        $access = $this->admin();
        return $access;
    }

    public function block()
    {
        $access = $this->admin();
        return $access;
    }

    public function unblock()
    {
        $access = $this->admin();
        return $access;
    }
}
