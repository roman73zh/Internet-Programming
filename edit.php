<?php
    session_start();
    if (!$_SESSION['user'] || (isset($_GET['id']) && $_SESSION['user']['admin'] != 1)) {
        header('Location: /');
    }
    
    if ($_SESSION['user']) {
        require_once 'vendor/updatetime.php';
    }
    
    require_once 'header.php';
    //print_r($_GET);
    if (!isset($_GET['id']) || $_GET['id'] == $_SESSION['user']['id']) {
        echo '
        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
            <form style="width: 75%; display: flex; align-items: center; flex-flow: column;" action="vendor/update.php" method="post" enctype="multipart/form-data">
                <center>
                <legend class="m-b-1 text-xs-center">Редактор пользователя</legend>
                </center>
                <label>Имя</label>
                <input type="text" class="form-control" name="full_name" value="' . $_SESSION['user']['full_name'] . '" required>
                <label style="margin-top: 20px;">Информация о профиле</label>
                <textarea class="form-control" name="legend" style="height: 500px; resize: none;">' . $_SESSION['user']['legend'] . '</textarea>
                <label style="margin-top: 20px;">Аватар</label>
                <input name="avatar" accept="image/*" type="file" style="margin-top: 20px;">
                <input type="submit" style="margin-top: 20px;" value="Отправить">
                <input type="hidden" name="id" value="' . $_SESSION['user']['id'] . '">
            </form>
        </div>
        <div style="display: flex; justify-content: center;">
            <form action="vendor/deleteuser.php" method="post">
                <input type="hidden" name="id" value="' . $_GET['id'] . '">
                <input type="submit" for="aweqr.php" value="Удалить пользователя">
            </form>
        </div>
        <br>
        ';
        if ($_SESSION["message"]) {
            echo "<p class='msg'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION["message"]);
        }
        echo '</form>
        ';
    }
    else if ($_SESSION['user']['admin'] == 1) {
        require_once 'vendor/connect.php';
        $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '" . $_GET['id'] . "'");
        $fetch = mysqli_fetch_assoc($user);
        
        echo '
        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
            <form style="width: 75%; display: flex; align-items: center; flex-flow: column;" action="vendor/update.php" method="post" enctype="multipart/form-data">
                <center>
                <legend class="m-b-1 text-xs-center">Редактор пользователя</legend>
                </center>
                <label>Имя</label>
                <input type="text" class="form-control" name="full_name" value="' . $fetch['full_name'] . '" required>
                <label style="margin-top: 20px;">Информация о профиле</label>
                <textarea class="form-control" name="legend" style="height: 500px; resize: none;">' . $fetch['legend'] . '</textarea>
                <label style="margin-top: 20px;">Аватар</label>
                <input name="avatar" accept="image/*" type="file" style="margin-top: 20px;">
                <input type="submit" style="margin-top: 20px;" value="Отправить">
                <input type="hidden" name="id" value="' . $_GET['id'] . '">
            </form>
        </div>
        <div style="display: flex; justify-content: center;">
            <form action="vendor/deleteuser.php" method="post">
                <input type="hidden" name="id" value="' . $_GET['id'] . '">
                <input type="submit" for="aweqr.php" value="Удалить пользователя">
            </form>
            <form style="margin-left: 15px;" action="vendor/giveAd.php" method="post">
                <input type="hidden" name="id" value="' . $_GET['id'] . '">
                <input type="submit" value="Дать/лишить админку(и)">
            </form>
        </div>
        <br>
        '; 
        
        /*echo '
            <div class="profile-conteiner">
            <img src="' . $fetch['avatar'] . '" width="200" height="200" alt=""><br>
            <h2 style="margin: 10px 20px;">' . $fetch['full_name'] . '</h2><br>
        ';
        if ($fetch['admin'] == 1) {
            echo '<i>админ</i>';
        }
        if ($_SESSION['user']['admin'] == 1) {
            echo '<a href="edit.php"><i>Редактировать страницу</i></a>';
        }
        echo '
            <p class="legend">' . $fetch['legend'] . '</p>
            </div>
        ';*/
    }
    
    require_once 'footer.php';

?>