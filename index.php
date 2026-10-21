<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chapters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-wrapper">
        <?php require 'components/header.php'; ?>
        <main>
            <?php require 'components/form.php'; ?>
            <div class="task-list">
                <?php require 'components/task_item.php' ?>
                <?php require 'components/task_item.php' ?>
            </div>
        </main>
        <?php require 'components/footer.php'; ?>
    </div>
</body>    
</html>