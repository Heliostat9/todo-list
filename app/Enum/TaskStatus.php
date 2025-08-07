<?php

namespace App\Enum;

enum TaskStatus: string
{
    case OPEN = 'open';
    case CLOSED = 'closed';
    case INPROGRESS = 'in_progress';
    case COMPLETED = 'completed';
}
