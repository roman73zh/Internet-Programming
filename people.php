<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /auth.php');
    }
    else {
        require_once 'vendor/updatetime.php';
    }
    
    require_once 'header.php';
    
    echo '<div class="conteiner" style="display: flex; align-items: center; flex-flow: column;">Сейчас онлайн:<br><br>';
        require_once 'vendor/connect.php';
        $users = mysqli_query($connect, "SELECT * FROM users WHERE " . time() . " - last_session < 120");
        $fetch = mysqli_fetch_all($users);
        for ($i = 0; $i < count($fetch); $i++) {
            echo '<div style="margin-bottom: 20px; width: 350px;"><a href="/profile.php?id=' . $fetch[$i][0] . '" style="border: 1px solid #ccc; min-width: 345px; border-radius: 4px; padding: 5px; display: inline-block;"><img class="mini-avatar" src="/' . $fetch[$i][7] . '" width="50" height="50" alt=""><span style="margin-left: 20px;">' . $fetch[$i][1] . '</span></a></div>';
            //print_r($fetch[$i][1]);
        }
        echo "<label>Все пользователи:</label>";
        $users = mysqli_query($connect, "SELECT * FROM users ORDER BY last_session DESC");
        $fetch = mysqli_fetch_all($users);
        for ($i = 0; $i < count($fetch); $i++) {
            echo '<div style="margin-bottom: 20px; width: 350px;"><a href="/profile.php?id=' . $fetch[$i][0] . '" style="color: #939393; border: 1px solid #ccc; min-width: 345px; border-radius: 4px; padding: 5px; display: inline-block;"><img class="mini-avatar" src="/' . $fetch[$i][7] . '" width="50" height="50" alt=""><span style="margin-left: 20px;">' . $fetch[$i][1] . '</span></a></div>';
            //print_r($fetch[$i][1]);
        }
    echo '</div>';
    
    /*if (!isset($_GET['id'])) {
        echo '
            <div class="profile-conteiner">
            <img src="' . $_SESSION['user']['avatar'] . '" width="200" height="200" alt=""><br>
            <i>online</i>
            <h2 style="margin: 10px 20px;">' . $_SESSION['user']['full_name'] . '</h2><br>
        ';
        if ($_SESSION['user']['admin'] == 1) {
            echo '<i>админ</i>';
        }
        echo '
            <a href="edit.php"><i>Редактировать страницу</i></a>
            <p class="legend">' . $_SESSION['user']['legend'] . '</p>
            </div>
        ';
    }
    else {
        require_once 'vendor/connect.php';
        $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '" . $_GET['id'] . "'");
        $fetch = mysqli_fetch_assoc($user);
        echo '
            <div class="profile-conteiner">
            <img src="' . $fetch['avatar'] . '" width="200" height="200" alt=""><br>
        ';
        if (time() - $fetch['last_session'] < 120) {
            echo '<i>online</i>';
        }
        else {
            echo '<i>был онлайн ' . date('d m H:i', $fetch['last_session']) . '</i>';
        }
        echo '
            <h2 style="margin: 10px 20px;">' . $fetch['full_name'] . '</h2><br>
        ';
        if ($fetch['admin'] == 1) {
            echo '<i>админ</i>';
        }
        if ($_SESSION['user']['admin'] == 1) {
            echo '<a href="edit.php?id=' . $_GET['id'] . '"><i>Редактировать страницу</i></a>';
        }
        echo '
            <p class="legend">' . $fetch['legend'] . '</p>
            </div>
        ';
    }*/
    require_once 'footer.php';

?>