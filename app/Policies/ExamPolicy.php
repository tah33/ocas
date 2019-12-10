<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Exam;
use App\User;
use Auth;
class ExamPolicy
{
    use HandlesAuthorization;

    public function before()
    {
        $admin = Auth::guard('admin')->check();
        if ($admin)
            return true;
        return false;
    }

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Exam $exam)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Exam $exam)
    {
        //
    }

    public function delete(User $user, Exam $exam)
    {
        //
    }

    public function restore(User $user, Exam $exam)
    {
        //
    }

    public function forceDelete(User $user, Exam $exam)
    {
        //
    }
}
