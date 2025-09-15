<?php

include_once '../model/task.model.php';

class TaskController extends Task
{
    private $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function create()
    {
        $this->createNewTask($this->task);

        header('Location: ../view/index.view.php');
    }
}