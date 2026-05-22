<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Headers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="logo.png" alt="Логотип МосПолитеха" class="logo">
    <h1>Домашняя работа: Feedback Form</h1>
</header>

<main>
    <section class="card">
        <h2>Результат работы функции get_headers</h2>

        <?php
            $headers = get_headers("https://httpbin.org/post");
            $result = "";

            if ($headers) {
                foreach ($headers as $header) {
                    $result .= $header . "\n";
                }
            } else {
                $result = "Не удалось получить заголовки.";
            }
        ?>

        <textarea readonly><?php echo htmlspecialchars($result); ?></textarea>

        <a class="page-link" href="index.php">Вернуться на 1 страницу</a>
    </section>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>