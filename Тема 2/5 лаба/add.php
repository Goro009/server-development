<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contacts = json_decode(file_get_contents('data.json'), true);

    if (!$contacts) {
        $contacts = [];
    }

    $contacts[] = [
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

    file_put_contents('data.json', json_encode($contacts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    echo "<p class='success'>Запись добавлена</p>";
}

$buttonText = 'Добавить запись';
?>

<h1>Добавление записи</h1>

<form method="POST">
    <?php include 'form.php'; ?>
</form>