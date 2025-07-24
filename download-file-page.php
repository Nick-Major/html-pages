<?php
declare(strict_types=1);

if (isset($_GET['text'])) {
    $text = $_GET['text'];

    header('Content-Type: text/plain; charset=utf-8');
    header('Content-Disposition: attachment; filename="downloaded.txt"');

    echo $text;
    exit;
} else {
    echo "Ошибка: не указан параметр 'text' в URL.";
}