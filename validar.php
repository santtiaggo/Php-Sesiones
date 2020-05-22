<?php
    session_start();
    $_SESSION['usuario'] = 'Santiago';
    header("Location:panel.php");
?>