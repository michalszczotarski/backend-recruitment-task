<?php

if (isset($_POST['add_user'])) {
        unset($_POST['add_user']);

        $fileHandler = new JsonFileHandler('users.json');
        $result = $fileHandler->addRecord($_POST);

        header("Location: /?add_user=" . $result);
        die();
}

?>