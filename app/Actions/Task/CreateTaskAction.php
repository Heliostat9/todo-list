<?php

namespace App\Actions\Task;

use App\Enum\TaskStatus;
use App\Models\Task;

class CreateTaskAction
{
    public function execute(array $data): Task
    {
        $task = new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->status = TaskStatus::OPEN;
        $task->save();

        return $task;
    }
}
