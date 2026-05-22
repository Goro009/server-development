<?php
if (!isset($row)) {
    $row = [
        'lastname' => '',
        'firstname' => '',
        'middlename' => '',
        'gender' => '',
        'birthdate' => '',
        'phone' => '',
        'address' => '',
        'email' => '',
        'comment' => ''
    ];
}

if (!isset($buttonText)) {
    $buttonText = 'Сохранить';
}
?>

<div class="add">
    <label>Фамилия</label>
    <input type="text" name="lastname" placeholder="Фамилия" value="<?= htmlspecialchars($row['lastname']) ?>" required>
</div>

<div class="add">
    <label>Имя</label>
    <input type="text" name="firstname" placeholder="Имя" value="<?= htmlspecialchars($row['firstname']) ?>" required>
</div>

<div class="add">
    <label>Отчество</label>
    <input type="text" name="middlename" placeholder="Отчество" value="<?= htmlspecialchars($row['middlename']) ?>">
</div>

<div class="add">
    <label>Пол</label>
    <select name="gender">
        <option value="">Выберите пол</option>
        <option value="Мужской" <?= $row['gender'] == 'Мужской' ? 'selected' : '' ?>>Мужской</option>
        <option value="Женский" <?= $row['gender'] == 'Женский' ? 'selected' : '' ?>>Женский</option>
    </select>
</div>

<div class="add">
    <label>Дата рождения</label>
    <input type="date" name="birthdate" value="<?= htmlspecialchars($row['birthdate']) ?>">
</div>

<div class="add">
    <label>Телефон</label>
    <input type="text" name="phone" placeholder="Телефон" value="<?= htmlspecialchars($row['phone']) ?>">
</div>

<div class="add">
    <label>Адрес</label>
    <input type="text" name="address" placeholder="Адрес" value="<?= htmlspecialchars($row['address']) ?>">
</div>

<div class="add">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($row['email']) ?>">
</div>

<div class="add">
    <label>Комментарий</label>
    <textarea name="comment" placeholder="Краткий комментарий"><?= htmlspecialchars($row['comment']) ?></textarea>
</div>

<button class="form-btn" type="submit"><?= $buttonText ?></button>