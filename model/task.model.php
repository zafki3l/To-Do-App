<?php

include_once '../config/database.config.php';

class Task extends Database
{
    protected function createNewTask($task)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO task (task_name) VALUES (?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param('s', $task);

        $stmt->execute();
    }

    public function getAllTask()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM task";

        $query = $conn->execute_query($sql);
        $data = $query->fetch_all(MYSQLI_ASSOC);
        
        return $data;
    }
}