<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once '../vendor/updatetime.php';
    }
    else {
        header('Location: ../auth.php');
    }
    
    require_once '../vendor/connect.php';
    require_once '../header.php';
    echo '
        <div style="display: flex; align-items: center; flex-flow: column;" class="conteiner">
            <a href="map.php" style="font-size: 20px;">Начать игру</a><br>
            <label>Топ пользователей:</label>';
        $users = mysqli_query($connect, "SELECT * FROM game ORDER BY score DESC");
        $fetch = mysqli_fetch_all($users);
        for ($i = 0; $i < count($fetch); $i++) {
            echo '<div style="margin-bottom: 20px;"><a href="/profile.php?id=' . $fetch[$i][0] . '" style="color: #939393; border: 1px solid #ccc; width: 350px; border-radius: 4px; padding: 5px; display: inline-block;"><img class="mini-avatar" src="/' . $fetch[$i][2] . '" width="50" height="50" alt=""><span style="display: inline-block; height: 36px; width: 65%; overflow: hidden; margin-left: 20px; padding-top: 15px;">' . $fetch[$i][1] . '</span><span style="margin-left: 20px; font-weight: bold;">' . $fetch[$i][3] . '</span></a></div>';
            //print_r($fetch[$i][1]);
        }
    echo '</div>
    ';
    require_once '../footer.php';

?>