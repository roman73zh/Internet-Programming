<?php
    session_start();
    require_once 'connect.php';
    
    mysqli_query($connect, "UPDATE `users` SET `last_session` = '" . time() . "' WHERE `users`.`id` = " . $_SESSION['user']['id']);