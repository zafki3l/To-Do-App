<?php

include_once '../controller/taskController.controller.php';

$task = $_POST['task'];

$createTask = new TaskController($task);
$createTask->create();