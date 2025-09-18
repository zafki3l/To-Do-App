<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Nhập task mới -->
    <form action="../actions/createNewTask.actions.php" method="post">
        <br>
        <input type="text" name="task" id="task" placeholder="Enter a task...">
        <br>
        <button type="submit">Add task</button>
    </form>
</body>
</html>