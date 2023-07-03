<?php
define('__ROOT__', dirname(__FILE__, 2));

require_once(__ROOT__ . '/functions.php');
require_once(__ROOT__ . '/inc/class/class-json-file-handler.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <link rel="stylesheet" href="<?php echo asset_path('gravity-normalize-style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&family=Rubik:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_path('gravity-style.css') ?>">
</head>

<body>