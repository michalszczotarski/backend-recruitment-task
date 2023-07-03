<?php
require_once('inc/header.php');

$action = null;

if (isset($_GET['action'])) $action = $_GET['action'];

switch ($action) {
    case 'add':
        include_once('inc/model/model-add-user.php');
        break;
    default:
        include_once('inc/model/model-users-list.php');
        break;

}


switch ($action) {
    case 'add':
        include_once('inc/view/add-user.php');
        break;
    default:
        include_once('inc/view/users-list.php');
        break;
}
?>

<?php
require_once('inc/footer.php');
?>