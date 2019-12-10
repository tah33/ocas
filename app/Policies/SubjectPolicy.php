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
        return $this->admin();
    }

    public function update()
    {
        return $this->admin();
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
