<?php
$contacts = json_decode(file_get_contents('data.json'), true);

if (!$contacts) {
    $contacts = [];
}

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $id !== null) {

    $contacts[$id] = [
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'middlename' => $_POST['middlename'],
        'gender' => $_POST['gender'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
        'comment' => $_POST['comment']
    ];

    file_put_contents(
        'data.json',
        json_encode($contacts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
    );

    echo "<p class='success'>Запись изменена</p>";
}
?>

<h1>Редактирование записи</h1>

<?php if ($id === null): ?>

    <div class="links-list">

        <?php foreach ($contacts as $index => $contact): ?>

            <p>
                <a href="index.php?page=edit&id=<?= $index ?>">
                    <?= $contact['lastname'] ?>
                    <?= $contact['firstname'] ?>
                </a>
            </p>

        <?php endforeach; ?>

    </div>

<?php else: ?>

    <?php
    $row = $contacts[$id];
    $buttonText = 'Сохранить изменения';
    ?>

    <form method="POST" class="form-grid">

        <?php include 'form.php'; ?>

    </form>

<?php endif; ?>