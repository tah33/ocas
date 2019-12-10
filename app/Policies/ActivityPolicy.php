<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Activity;
use App\User;
use Auth;
class ActivityPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
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

    public function view(User $user, Activity $activity)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Activity $activity)
    {
        //
    }

    public function delete(User $user, Activity $activity)
    {
        //
    }

    public function restore(User $user, Activity $activity)
    {
        //
    }

    public function forceDelete(User $user, Activity $activity)
    {
        //
    }
}
