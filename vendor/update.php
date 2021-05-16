<?php
    session_start();
    if (!$_SESSION['user'] || ($_POST['id'] != $_SESSION['user']['id'] && $_SESSION['user']['admin'] != 1)) {
        header('Location: /');
    }
    
    require_once "connect.php";
    
    //print_r($_FILES);
    if ($_FILES['avatar']['size'] != 0) {
        $path = '../uploads/' . time() . $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
        mysqli_query($connect, "UPDATE users SET avatar = '" . $path . "' WHERE id = " . $_POST['id']);
    }
    mysqli_query($connect, "UPDATE users SET full_name = '" . $_POST['full_name'] . "', legend = '" . $_POST['legend'] . "' WHERE id = " . $_POST['id']);
    
    require_once '../header.php';
    echo '<div style="text-align: center; height: 200px; padding-top: 30px;"><p>Данные обновлены!<br>по идее</p><br><a href="../profile.php?id=' . $_POST['id'] . '">Вернуться</a></div>';
    require_once '../footer.php';