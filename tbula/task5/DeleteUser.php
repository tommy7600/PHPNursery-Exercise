<?php
    include_once 'UserCommon.php';
    UserCommon::DeleteUser($_GET['id']);
    header('Location:index.php');
?>
