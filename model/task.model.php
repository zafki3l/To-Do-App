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

        $stmt->close();
        $conn->close();
    }

    public function getAllTask()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM task";

        $query = $conn->execute_query($sql);
        $data = $query->fetch_all(MYSQLI_ASSOC);

        $query->free_result();
        $conn->close();

        return $data;
    }

    public function getEditTask($id)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM task WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        $result->free();
        $stmt->close();
        $conn->close();

        return $data;
    }

    protected function editTask($id, $task, $status)
    {
        $conn = $this->connect();

        $stmt = $conn->prepare(
            "UPDATE task
            SET task_name = ?,
                status = ?
            WHERE id = ?"
        );
        
        $stmt->bind_param('sii', $task, $status, $id);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

    protected function deleteTask($id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM task WHERE id = ?";
        $stmt = $conn->prepare($sql); 
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }
}