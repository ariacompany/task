<?php
namespace App\Repositories\TaskRepo;

use App\Task;

class TaskRepo
{
    protected $task;

    function __construct(Task $a)
    {
        $this ->task = $a;
    }
}