<?php
    print_r($_POST["text"]);
    
    session_start();
    if ($_SESSION['user']['admin'] != '1') {
        header('Location: /map.php');
    }
    
    require_once '../vendor/connect.php';
    $arr = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM history"));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Редактор истории</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        input {
            margin-top: 10px;
        }
        #history {
            margin-top: 10px;
            width: 700px;
            height: 700px;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["id"]) && isset($_POST["history"])) {
            $id = $_POST['id'];
            $body = $_POST['history'];
            if (isset($_POST["proceed"])){
                $temp = explode("\n", $body);
                $body="";
                foreach($temp as $paragraph){
                    $body.= $paragraph."<br>";
                }
            }
            mysqli_query($connect, "UPDATE history
                                    SET body = '$body'
                                    WHERE id = $id;");
        }
    ?>
    <a href="/map/map.php"><назад</a>
    <h2>
        Редактор истории.
    </h2>
    <h3>
        Перепиши историю своего реигона
    </h3>
    <form action="editor.php" method="post">
        <!--<input name="id" type="text" id="id" VALUE="<?php echo $_POST["id"]?>">-->
        <select name="id" size="1" onchange="
            var val = this.options[this.selectedIndex].value;
            $.get('getHistory.php', {text: val}, function(data){
            	document.getElementById('history').innerHTML = data;
            });
        ">
            <option selected value="1">Адыгея</option>
            <?php
                for ($i = 2; $i <= count($arr); $i++) {
                    echo '<option value="' . $i . '">' . $arr[$i - 1][1] . '</option>';
                }
            ?>
        </select>
        <br>
        <input type="checkbox" name="proceed" value="Yes" >Уработать&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</input>
        <input type="submit"></input>
        <br>
        <textarea name="history" id="history"><?php
            if (isset($_POST["history"])) {
                echo $_POST["history"];
            }
            else {
                
                $select = mysqli_query($connect, "SELECT * FROM `history` WHERE `id` = '1'");
                echo(mysqli_fetch_assoc($select)['body']);
            }
        ?></textarea><br>
    </form>
    <script src="/assets/js/jquery-3.6.0.js"></script>
</body>