<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Solve the equation</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        header {
            background: #8b0000;
            color: white;
            text-align: center;
            padding: 25px;
        }

        main {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        .result {
            margin-top: 30px;
            font-size: 22px;
            background: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<header>
    <h1>Домашняя работа: Solve the equation</h1>
</header>

<main>

    <h2>Решение уравнения</h2>

    <?php
        $a = 5;
        $b = 20;
        $operator = "*";

        if ($operator == "*") {
            $x = $b / $a;
        }
    ?>

    <div class="result">
        <p>Уравнение: <b>4 * X = 36</b></p>

        <p>Оператор: <b><?php echo $operator; ?></b></p>

        <p>Неизвестная переменная: <b>X</b></p>

        <p>Решение:</p>

        <p><b>X = 36 / 4</b></p>

        <p>Ответ:</p>

        <p><b>X = <?php echo $x; ?></b></p>
    </div>

</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>