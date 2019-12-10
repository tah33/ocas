<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Department;
use App\User;
use Auth;
class DepartmentPolicy
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
    }

    public function view()
    {
        $a = $this->admin();
        return $a;
    }

    public function create()
    {
        $a = $this->admin();
        return $a;
    }

    public function update()
    {
        $a = $this->admin();
        return $a;
    }

    public function delete(User $user, Department $department)
    {
        //
    }

    public function restore(User $user, Department $department)
    {
        //
    }

    public function forceDelete(User $user, Department $department)
    {
        //
    }
}
