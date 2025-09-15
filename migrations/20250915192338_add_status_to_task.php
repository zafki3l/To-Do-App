<?php 

include_once '../config/database.config.php';

class AddStatusToTask extends Database
{
    public function addStatusToTask()
    {
        try {
            $sql = "ALTER TABLE task
                    ADD status TINYINT DEFAULT 1
                    AFTER task_name";

            $query = $this->connect()->execute_query($sql);

            echo 'Add column successfully!<br>';
        } catch (Exception $e) {
            print 'ERROR!: ' . $e->getMessage() . '<br>';
            die();
        }
    }
}

$task = new AddStatusToTask();
$task->addStatusToTask();