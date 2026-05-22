<?php
date_default_timezone_set('Europe/Moscow');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Hello, World (PHP)</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f5f7fa;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #8b0000;
            color: white;
            padding: 20px;
        }

        header img {
            height: 50px;
        }

        header h1 {
            margin: 0 auto;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
        }

        button {
            background: #8b0000;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <div>
        <img src="logo.png">
    </div>

    <h1>Домашняя работа: Hello, World!</h1>

    <div></div>
</header>

<main>
    <div class="box">
        <h2>Динамический контент (PHP)</h2>

        <p>
            <?php
                echo "Hello, World!";
            ?>
        </p>

        <?php

        $student = "Я Гор";

        $phrases = [
            "Добро пожаловать на мою первую лабораторную работу по серверной разработке",
            "Я сделал это для демонстрации работы PHP",
            "Сегодня хороший день"
        ];

        $randomPhrase = $phrases[array_rand($phrases)];

        ?>

        <p>
            <?php echo $student; ?>
        </p>

        <p>
            <?php echo $randomPhrase; ?>
        </p>

        <form method="post">
            <button type="submit">Показать другую фразу</button>
        </form>

        <p>
            Текущее время:
            <?php
                echo date("H:i:s");
            ?>
        </p>

        <p>
            Сегодня:
            <?php
                echo date("d.m.Y");
            ?>
        </p>

        <p>
            <?php
                $hour = date("H");

                if ($hour < 12) {
                    echo "Доброе утро!";
                } elseif ($hour < 17) {
                    echo "Добрый день!";
                } else {
                    echo "Добрый вечер!";
                }
            ?>
        </p>

    </div>

    <p style="margin-top: 30px;">
        Ссылка на репозиторий:
        <a href="#"></a>
    </p>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>