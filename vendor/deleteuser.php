<?php
    session_start();
    if (!$_SESSION['user'] || ($_POST['id'] != $_SESSION['user']['id'] && $_SESSION['user']['admin'] != 1)) {
        header('Location: /');
    }
    
    require_once "connect.php";
    mysqli_query($connect, "DELETE FROM users WHERE id = " . $_POST['id']) or die("bruh");
    
    if ($_SESSION['user']['id'] == $_POST['id']) {
        require_once 'logout.php';
    }
    
    require_once '../header.php';
    echo '<div style="text-align: center; height: 200px; padding-top: 30px;"><p>Пользователь удален!<br>по идее</p><br><a href="../">На главную</a></div>';
    require_once '../footer.php';