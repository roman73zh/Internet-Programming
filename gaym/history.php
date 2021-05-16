<?php
    session_start();
    if ($_SESSION['user']) {
        require_once '../vendor/updatetime.php';
    }
    else {
        header('Location: ../auth.php');
    }
    
    if (!isset($_SESSION['game'])) {
        $_SESSION['game'] = [
            "level" => 1,
            "id" => 96,
            "loses" => 6
        ];
    }
    
        if ($_SESSION['game']['id'] != $_POST['id']) {
            $_SESSION['game']['id'] = rand (0, 84);
            $_SESSION['game']['loses']--;
            if ($_SESSION['game']['loses'] == 0) echo "  ";
            else if ($_SESSION['game']['loses'] != 5) echo " ";
        } else {
            $_SESSION['game']['id'] = rand (0, 84);
            $_SESSION['game']['level']++;
        }
        
        $link=mysqli_connect("localhost", "Projects_fuck", "28003208Fuck", "Projects_hist_data");
        $id = $_SESSION['game']['id'];
        $results = mysqli_fetch_assoc($query = mysqli_query($link, "SELECT title, body FROM history WHERE id=$id"));
        
        if ($_SESSION['game']['loses'] <= 0) {
            echo 'Игра окончена с умопомпрачительным счетом <span style="color: #6f42c1;" >' . $_SESSION['game']['level'] . '</span><br>Нажмите на любой регион, чтобы начать заново<br>или выходите в <a href="menu.php">главное меню</a>';
            
            require_once '../vendor/connect.php';
            $users = mysqli_query($connect, "SELECT * FROM game WHERE id = " . $_SESSION['user']['id']);
            if (mysqli_num_rows($users) > 0) {
                $user = mysqli_fetch_assoc($users);
                if ($user['score'] < $_SESSION['game']['level']) {
                    $score = $_SESSION['game']['level'];
                    mysqli_query($connect, "UPDATE game SET score = '$score', avatar = '" . $_SESSION['user']['avatar'] . "', full_name = '" . $_SESSION['user']['full_name'] . "' WHERE id =" . $_SESSION['user']['id']) or print_r("qwrfdsag");
                }
            } else {
                $id = $_SESSION['user']['id'];
                $name = $_SESSION['user']['full_name'];
                $avatar = $_SESSION['user']['avatar'];
                $level = $_SESSION['game']['level'];
                
                mysqli_query($connect, "INSERT INTO game (`id`, `full_name`, `avatar`, `score`) VALUES ('$id', '$name', '$avatar', '$level')");
            }
            
            unset($_SESSION['game']);
        }
        else {
            echo 'Вы на ' . $_SESSION['game']['level'] . ' уровне.<br>Найдите <span style="color: #6f42c1;" >' . $results['title'] . '</span><br>Осталось попыток <span style="color: #6f42c1;" >' . $_SESSION['game']['loses'] . '</span>';
        }
        //print_r($_SESSION['game']);
        //print_r($_POST['id']);
        //echo "bruh2";
    
    //echo ""
    
    //$stmt = $db->prepare('SELECT title FROM history WHERE id=:id');
    //$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    //$result = $stmt->execute();
    //echo $result->fetchArray(SQLITE3_ASSOC);