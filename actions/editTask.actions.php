<?php

include_once '../controller/taskController.controller.php';

$id = $_POST['id'];
$task = $_POST['task'];
$status = $_POST['status'];

$tasks = new TaskController($task, $status);
$tasks->edit($id);