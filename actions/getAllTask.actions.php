<?php

include_once '../model/task.model.php';

$task = new Task();

$tasks = $task->getAllTask();

return $tasks;