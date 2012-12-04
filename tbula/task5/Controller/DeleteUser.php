<?php
    include_once '../AutoLoad.php';
    
    Common_User::DeleteUser($_GET['id']);
    header('Location:../index.php');
?>
