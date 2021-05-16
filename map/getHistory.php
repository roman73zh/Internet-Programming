<?php 
    session_start();
    require_once '../vendor/connect.php';
    $select = mysqli_query($connect, "SELECT * FROM `history` WHERE `id` = '" . $_GET['text'] . "'");
    print_r(mysqli_fetch_assoc($select)['body']);