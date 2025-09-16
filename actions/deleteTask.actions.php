<?php 

include_once '../controller/taskController.controller.php';

$id = $_GET['id'];

$tasks = new TaskController();
$tasks->delete($id);