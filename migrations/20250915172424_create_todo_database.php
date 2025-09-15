<?php 

include_once '../config/database.config.php';

class CreateTodoDatabase extends Database
{
    public function CreateTodoDB()
    {
        try {
            $sql = "CREATE DATABASE todo";

            $this->connect()->execute_query($sql);

            echo 'Create Database successfully';
        } catch (Exception $e) {
            print 'ERROR!: ' . $e->getMessage() . '<br>';
            die();
        }
    }
}

$todo = new CreateTodoDatabase();
$todo->CreateTodoDB();