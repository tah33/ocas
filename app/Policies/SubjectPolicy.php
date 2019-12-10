<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Subject;
use App\User;
use Auth;
class SubjectPolicy
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

    public function view(User $user, Subject $subject)
    {
        //
    }

    public function create()
    {
        $access = $this->admin();
        return $access;
    }

    public function update()
    {
        $access = $this->admin();
        return $access;
    }

    public function delete(User $user, Subject $subject)
    {
        //
    }

    public function restore(User $user, Subject $subject)
    {
        //
    }

    public function forceDelete(User $user, Subject $subject)
    {
        //
    }
}
