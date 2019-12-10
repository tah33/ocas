<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Test;
use App\User;
use Auth;
class TestPolicy
{
    use HandlesAuthorization;

    public function student()
    {
        $student = Auth::guard('student')->check();
        if ($student)
            return true;
        return false;
    }

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Test $test)
    {
        //
    }


    public function create()
    {
        return $this->student();
    }

    public function update(User $user, Test $test)
    {
        //
    }

    public function delete(User $user, Test $test)
    {
        //
    }

    public function restore(User $user, Test $test)
    {
        //
    }

    public function forceDelete(User $user, Test $test)
    {
        //
    }
}
