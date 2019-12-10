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
        $a = $this->admin();
        return $a;
    }

    public function block()
    {
        $a = $this->admin();
        return $a;
    }

    public function unblock()
    {
        $a = $this->admin();
        return $a;
    }
}