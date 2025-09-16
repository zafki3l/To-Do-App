<?php 

include_once '../actions/getEditTask.actions.php';
$task = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TODO APP</h1>

     <!-- Sửa task -->
    <form action="../actions/editTask.actions.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id']) ?>">
        <label for="task">Task name:</label>
        <br>
        <input type="text" name="task" id="task" value="<?php echo htmlspecialchars($task['task_name']) ?>" placeholder="Task">
        <br>
        <label for="status">Task status:</label>
        <br>
        <select name="status" id="status">
            <option value="1" <?= $task['status'] == 1 ? 'selected' : '' ?>>In process</option>
            <option value="2" <?= $task['status'] == 2 ? 'selected' : '' ?>>Completed</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>