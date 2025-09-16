<?php

include_once '../model/task.model.php';

$id = $_GET['id'];
$tasks = new Task();
$data = $tasks->getEditTask($id);

return $data;