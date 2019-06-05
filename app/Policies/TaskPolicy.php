<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if user can complete task.
     *
     * @return void
     */
    public function complete(User $user,Task $task)
    {
        return $user->is($task->user);
    }
}
