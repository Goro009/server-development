<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="logo.png" alt="Логотип МосПолитеха" class="logo">
    <h1>Домашняя работа: Feedback Form</h1>
</header>

<main>
    <section class="card">
        <h2>Форма обратной связи</h2>

        <form action="https://httpbin.org/post" method="post">
            <label>
                Имя пользователя
                <input type="text" name="username" placeholder="Введите имя" required>
            </label>

            <label>
                E-mail пользователя
                <input type="email" name="email" placeholder="Введите e-mail" required>
            </label>

            <label>
                Тип обращения
                <select name="request_type" required>
                    <option value="">Выберите тип обращения</option>
                    <option value="complaint">Жалоба</option>
                    <option value="suggestion">Предложение</option>
                    <option value="thanks">Благодарность</option>
                </select>
            </label>

            <label>
                Текст обращения
                <textarea name="message" placeholder="Введите текст обращения" required></textarea>
            </label>

            <div class="checkboxes">
                <p>Вариант ответа:</p>

                <label class="checkbox-label">
                    <input type="checkbox" name="answer_sms" value="sms">
                    SMS
                </label>

                <label class="checkbox-label">
                    <input type="checkbox" name="answer_email" value="email">
                    E-mail
                </label>
            </div>

            <button type="submit">Отправить</button>
        </form>

        <a class="page-link" href="headers.php">Перейти на 2 страницу</a>
    </section>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>