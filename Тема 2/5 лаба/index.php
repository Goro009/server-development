<?php
$page = $_GET['page'] ?? 'viewer';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Notebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <?php include 'menu.php'; ?>
</header>

<main>
    <?php
        if ($page == 'add') {
            include 'add.php';
        } elseif ($page == 'edit') {
            include 'edit.php';
        } elseif ($page == 'delete') {
            include 'delete.php';
        } else {
            include 'viewer.php';
        }
    ?>
</main>

<footer></footer>

</body>
</html>