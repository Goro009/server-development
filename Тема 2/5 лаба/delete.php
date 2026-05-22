<?php
$contacts = json_decode(file_get_contents('data.json'), true);

if (!$contacts) {
    $contacts = [];
}

$id = $_GET['id'] ?? null;

if ($id !== null && isset($contacts[$id])) {
    $deletedName = $contacts[$id]['lastname'] . ' ' . $contacts[$id]['firstname'];

    unset($contacts[$id]);
    $contacts = array_values($contacts);

    file_put_contents('data.json', json_encode($contacts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    echo "<p class='success'>Запись удалена: $deletedName</p>";
}
?>

<h1>Удаление записи</h1>

<?php if (empty($contacts)): ?>

    <p>Записей пока нет</p>

<?php else: ?>

    <?php foreach ($contacts as $index => $contact): ?>
        <p>
            <a href="index.php?page=delete&id=<?= $index ?>">
                Удалить:
                <?= htmlspecialchars($contact['lastname']) ?>
                <?= htmlspecialchars($contact['firstname']) ?>
            </a>
        </p>
    <?php endforeach; ?>

<?php endif; ?>