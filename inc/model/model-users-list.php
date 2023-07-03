<?php

$fileHandler = new JsonFileHandler('users.json');
$users = $fileHandler->getAllRecords();

if (isset($_POST['delete_user'])) {
        $fileHandler = new JsonFileHandler('users.json');
        $result = $fileHandler->deleteRecord(intval($_POST['user_id']));

        header("Location: /?delete_user=" . $result);
        die();
}

if (isset($_GET['delete_user'])) {
        if ($_GET['delete_user']) {
                $success[] = 'User has been deleted';
        } else {
                $errors[] = 'An error has occurred';
        }
}

if (isset($_GET['add_user'])) {
        if ($_GET['add_user']) {
                $success[] = 'User has been added';
        } else {
                $errors[] = 'An error has occurred';
        }
}

?>