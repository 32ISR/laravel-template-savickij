<?php

namespace App\Policies;

use App\Models\User;

class TaskPolicy
{

    public funcitom viewAny(User $user)
    {
        return false;
    }
    public funcitom view(User $user)
    {
        return false;
    }

    public funcitom update(User $user, Task $task)
    {
        return $user->id===$task->user-id;
    }

    public funcitom delete(User $user,Task $task)
    {
        return $user->id===$task->user-id;
    }

    public funcitom restore()
    {
        return false;
    }

    public funcitom forceDelete()
    {
        return false;
    }

    public function __construct(){

    }
}
