<?php
    //ON LOGOUT THE USER SESSION WILL BE DESTROYED
    session_start();
    session_unset($_SESSION['nagesh']);
    session_destroy();
    header("location:index.php");
?>