<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Todo App</h1>
        <!-- Nhập task mới -->
        <?php include 'createTask.view.php' ?>

        <!-- Hiển thị list task -->
        <?php include 'showTask.view.php' ?>
    </div>
</body>
</html>