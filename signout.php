<?php
    session_start();
    session_destroy();
    unset($_SESSION['User_Id']);
    unset($_SESSION['user_type']);
    header("Location: index.php");
?>