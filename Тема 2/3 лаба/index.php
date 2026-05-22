<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>

    <style>
        body {
            margin: 0;
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }

        header {
            background: #8b0000;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 32px;
            font-weight: bold;
        }

        .calculator {
            width: 620px;
            margin: 50px auto;
            background: #2b2b2b;
            padding: 18px;
            border-radius: 20px;
        }

        input[type=text] {
            width: 100%;
            height: 75px;
            font-size: 36px;
            margin-bottom: 18px;
            text-align: right;
            padding-right: 15px;
            box-sizing: border-box;
            border-radius: 12px;
            border: none;
            background: white;
            color: black;
            font-weight: bold;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
        }

        button {
            height: 68px;
            font-size: 26px;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            background: #e5e5e5;
            color: black;
            font-weight: bold;
        }

        .op {
            background: #666;
            color: white;
        }

        .equal {
            background: #8b0000;
            color: white;
        }

        .clear {
            background: #444;
            color: white;
        }

        .result {
            margin-top: 20px;
            font-size: 24px;
            text-align: center;
            color: white;
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
    Домашняя работа: Calculator
</header>

<div class="calculator">

    <form method="POST">

        <input type="text" id="display" name="expression"
        value="<?php echo isset($_POST['expression']) ? htmlspecialchars($_POST['expression']) : ''; ?>">

        <div class="buttons">

            <button type="button" class="op" onclick="add('sqrt(')">√</button>
            <button type="button" class="op" onclick="add('ln(')">ln</button>
            <button type="button" class="op" onclick="add('log(')">log</button>
            <button type="button" class="op" onclick="add('!')">!</button>
            <button type="button" class="op" onclick="add('pi')">π</button>
            <button type="button" class="op" onclick="add('e')">e</button>

            <button type="button" onclick="add('7')">7</button>
            <button type="button" onclick="add('8')">8</button>
            <button type="button" onclick="add('9')">9</button>
            <button type="button" class="op" onclick="add('(')">(</button>
            <button type="button" class="op" onclick="add(')')">)</button>
            <button type="button" class="op" onclick="add('^')">xʸ</button>

            <button type="button" onclick="add('4')">4</button>
            <button type="button" onclick="add('5')">5</button>
            <button type="button" onclick="add('6')">6</button>
            <button type="button" class="op" onclick="add('*')">*</button>
            <button type="button" class="op" onclick="add('/')">/</button>
            <button type="button" class="op" onclick="add('abs(')">|x|</button>

            <button type="button" onclick="add('1')">1</button>
            <button type="button" onclick="add('2')">2</button>
            <button type="button" onclick="add('3')">3</button>
            <button type="button" class="op" onclick="add('+')">+</button>
            <button type="button" class="op" onclick="add('-')">-</button>
            <button type="button" class="op" onclick="add('^2')">x²</button>

            <button type="button" onclick="add('0')">0</button>
            <button type="button" onclick="add('.')">.</button>
            <button type="submit" class="equal">=</button>
            <button type="button" class="clear" onclick="clearDisplay()">C</button>
            <button type="button" class="op" onclick="add('^2')">x²</button>
            <button type="button" class="op" onclick="add('^3')">x³</button>

        </div>
    </form>

    <div class="result">

        <?php

        function factorial($number)
        {
            if ($number < 0) {
                return null;
            }

            $result = 1;

            for ($i = 1; $i <= $number; $i++) {
                $result *= $i;
            }

            return $result;
        }

        if (isset($_POST['expression'])) {

            $expression = $_POST['expression'];

            if (preg_match('/^[0-9+\-*\/(). ^a-z!]+$/', $expression)) {

                try {
                    $expression = str_replace('pi', pi(), $expression);
                    $expression = str_replace('e', exp(1), $expression);

                    $expression = preg_replace('/sqrt\(([^()]+)\)/', 'sqrt($1)', $expression);
                    $expression = preg_replace('/ln\(([^()]+)\)/', 'log($1)', $expression);
                    $expression = preg_replace('/log\(([^()]+)\)/', 'log10($1)', $expression);
                    $expression = preg_replace('/abs\(([^()]+)\)/', 'abs($1)', $expression);

                    while (preg_match('/(\d+)!/', $expression, $matches)) {
                        $factorialValue = factorial((int)$matches[1]);
                        $expression = str_replace($matches[0], $factorialValue, $expression);
                    }

                    while (preg_match('/(\d+(?:\.\d+)?)\^(\d+(?:\.\d+)?)/', $expression, $matches)) {
                        $powerValue = pow($matches[1], $matches[2]);
                        $expression = str_replace($matches[0], $powerValue, $expression);
                    }

                    eval('$result = ' . $expression . ';');

                    echo "Результат: " . $result;

                } catch (Throwable $e) {
                    echo "Ошибка вычисления";
                }

            } else {
                echo "Некорректное выражение";
            }
        }

        ?>

    </div>

</div>

<footer>
    Задание для самостоятельной работы
</footer>

<script>
function add(value) {
    document.getElementById('display').value += value;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}
</script>

</body>
</html>