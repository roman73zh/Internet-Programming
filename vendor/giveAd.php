<?php
    session_start();
    if (!$_SESSION['user'] || ($_POST['id'] != $_SESSION['user']['id'] && $_SESSION['user']['admin'] != 1)) {
        header('Location: /');
    }
    
    require_once "connect.php";
    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '" . $_POST['id'] . "'");
    $fetch = mysqli_fetch_assoc($user);
    
    if ($fetch['admin'] == 0) {
        mysqli_query($connect, "UPDATE `users` SET `admin` = 1 WHERE `users`.`id` = " . $_POST['id']) or die("bruh");
        require_once '../header.php';
        echo '<div style="text-align: center; height: 200px; padding-top: 30px;"><p>Пользователь теперь Übermensch!<br>по идее</p><br><a href="../profile.php?id=' . $_POST['id'] . '">Вернуться</a></div>';
        require_once '../footer.php';
    } else {
        mysqli_query($connect, "UPDATE `users` SET `admin` = 0 WHERE `users`.`id` = " . $_POST['id']) or die("bruh");
        require_once '../header.php';
        echo '<div style="text-align: center; height: 200px; padding-top: 30px;"><p>Пользователь теперь Untermensch!<br>по идее</p><br><a href="../profile.php?id=' . $_POST['id'] . '">Вернуться</a></div>';
        require_once '../footer.php';
    }