<?php
$title ??= 'No Title';
$content ??= '';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
        </nav>
    </header>
    <?= $content ?>
    <footer>
        <p>&copy; Now - Marc Coupland</p>
    </footer>
</body>
</html>