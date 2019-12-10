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
        return $this->admin();

    }

    public function create()
    {
        return $this->admin();
    }

    public function update()
    {
        return $this->admin();
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
