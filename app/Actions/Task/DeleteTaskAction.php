<?php

namespace App\Actions\Task;

use App\Models\Task;

class DeleteTaskAction
{
    public function exectue(Task $task): void
    {
        $task->delete();
    }
}
