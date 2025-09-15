<?php 

include_once '../config/database.config.php';

class CreateTaskTable extends Database
{
    public function createTaskTable()
    {
        try {
            $sql = "CREATE TABLE task (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                task_name VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

            $query = $this->connect()->execute_query($sql);

            echo 'Create table successfully!<br>';
        } catch (Exception $e) {
            print 'ERROR!: ' . $e->getMessage() . '<br>';
            die();
        }
    }
}

$task = new CreateTaskTable();
$task->createTaskTable();