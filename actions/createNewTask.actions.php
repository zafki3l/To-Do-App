<?php

include_once '../controller/taskController.controller.php';

$tasks = $_POST['task'];

$createTask = new TaskController($tasks);
$createTask->create();