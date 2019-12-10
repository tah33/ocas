<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Question;
use App\User;
use Auth;
class QuestionPolicy
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
        return $this->admin();
    }

    public function view()
    {
        return  $this->admin();
    }

    public function create()
    {
        return $this->admin();
    }


    public function update()
    {
        return $this->admin();
    }

    public function delete(User $user, Question $question)
    {
        //
    }

    public function restore(User $user, Question $question)
    {
        //
    }

    public function forceDelete(User $user, Question $question)
    {
        //
    }
}
