<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TODO APP</h1>

    <!-- Nhập task mới -->
    <?php include 'createTask.view.php' ?>

    <!-- Hiển thị list task -->
    <h2>TODO LIST</h2>
    <?php include 'showTask.view.php' ?>
</body>
</html>