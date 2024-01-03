<?php 
    session_start();
    $_SESSION['id'] = '2';
    $_SESSION['search'] = $_POST['txtSearch'];
        header('location:'."../../view/content.php");
 ?>