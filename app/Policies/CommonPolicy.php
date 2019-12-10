<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Common;
use Auth;

class CommonPolicy
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
        //
    }

    public function view(User $user, Common $common)
    {
        //
    }

    public function create()
    {
        return  $this->admin();
    }

    public function update(User $user, Common $common)
    {
        //
    }

    public function delete(User $user, Common $common)
    {
        //
    }

    public function restore(User $user, Common $common)
    {
        //
    }

    public function forceDelete(User $user, Common $common)
    {
        //
    }
}
