<?php
function menu($active = 'viewer') {
    $items = [
        'viewer' => 'Просмотр',
        'add' => 'Добавление записи',
        'edit' => 'Редактирование записи',
        'delete' => 'Удаление записи'
    ];

    foreach ($items as $key => $title) {
        $class = ($active == $key) ? 'select' : '';
        echo "<a class='$class' href='index.php?page=$key'>$title</a>";
    }
}

menu($_GET['page'] ?? 'viewer');
?>