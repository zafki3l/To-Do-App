<?php

include_once '../model/task.model.php';

class TaskController extends Task
{
    private $task;
    private $status;

    public function __construct($task = null, $status = null)
    {
        $this->task = $task;
        $this->status = $status;
    }

    public function create()
    {
        $this->createNewTask($this->task);

        header('Location: ../view/index.view.php');
        exit();
    }

    public function edit($id)
    {
        $this->editTask($id, $this->task, $this->status);

        header('Location: ../view/index.view.php');
        exit();
    }

    public function delete($id)
    {
        $this->deleteTask($id);

        header('Location: ../view/index.view.php');
        exit();
    }
}