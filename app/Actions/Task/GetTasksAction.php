<?php

namespace App\Actions\Task;

use App\Models\Task;
use Illuminate\Pagination\LengthAwarePaginator;

class GetTasksAction
{
    public function execute(): LengthAwarePaginator
    {
        return Task::paginate(10);
    }
}
