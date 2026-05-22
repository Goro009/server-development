<?php
$contacts = json_decode(file_get_contents('data.json'), true);

if (!$contacts) {
    $contacts = [];
}
?>

<h1>Просмотр записей</h1>

<table>
    <tr>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Пол</td>
        <td>Дата рождения</td>
        <td>Телефон</td>
        <td>Адрес</td>
        <td>E-mail</td>
        <td>Комментарий</td>
    </tr>

    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= htmlspecialchars($contact['lastname']) ?></td>
            <td><?= htmlspecialchars($contact['firstname']) ?></td>
            <td><?= htmlspecialchars($contact['middlename']) ?></td>
            <td><?= htmlspecialchars($contact['gender']) ?></td>
            <td><?= htmlspecialchars($contact['birthdate']) ?></td>
            <td><?= htmlspecialchars($contact['phone']) ?></td>
            <td><?= htmlspecialchars($contact['address']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['comment']) ?></td>
        </tr>
    <?php endforeach; ?>

    <?php if (empty($contacts)): ?>
        <tr>
            <td colspan="9">Записей пока нет</td>
        </tr>
    <?php endif; ?>
</table>