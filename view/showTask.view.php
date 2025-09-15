<?php 

include_once '../actions/getAllTask.actions.php';

$taskList = $tasks;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Hiển thị list task -->
    <table border="1">
        <tr>
            <th>Task Name</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
            <?php foreach ($taskList as $task): ?>
                <tr>
                    <td><?php echo htmlspecialchars($task['task_name']) ?></td>
                    <td><?php echo htmlspecialchars($task['status'] == 1 ? 'In process' : 'Completed') ?></td>
                    <td><?php echo htmlspecialchars($task['created_at']) ?></td>
                    <td><?php echo htmlspecialchars($task['updated_at']) ?></td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>