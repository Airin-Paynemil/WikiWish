<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../pantallasInicio/Login.html");
    exit();
?>
