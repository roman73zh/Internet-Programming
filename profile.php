<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
    else {
        require_once 'vendor/updatetime.php';
    }
    ?>
    <link href="/gallery/css/style.css?v15" rel="stylesheet" type="text/css">
    <?
    require_once 'header.php';
    if (!isset($_GET['id'])) {
        echo '
            <div class="profile-conteiner">
            <a href="javascript:showImg(0)">
                <img src="' . $_SESSION['user']['avatar'] . '" width="200" height="200" alt=""><br>
    		</a>
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
            <div class="image-popup"></div>
        ';
    }
    else {
        require_once 'vendor/connect.php';
        $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '" . $_GET['id'] . "'");
        $fetch = mysqli_fetch_assoc($user);
        echo '
            <div class="profile-conteiner">
            <a href="javascript:showImg(0)">
                <img src="' . $fetch['avatar'] . '" width="200" height="200" alt=""><br>
    		</a>
        ';
        if (time() - $fetch['last_session'] < 120) {
            echo '<i>online</i>';
        }
        else {
            echo '<i>был онлайн ' . date('d.m в H:i', $fetch['last_session']) . '</i>';
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
            <div class="image-popup"></div>
        ';
    }
    ?>
    <script>
    
    var photos = [
    <?php
        if (!isset($_GET['id'])) {
            print('["' . $_SESSION['user']['avatar'] . '", "", ""], ');
        }
        else {
            print('["' . $fetch['avatar'] . '", "", ""], ');
        }
    ?>
    "end"];
    
    const COUNT_COLUMNS = 1;
    const COUNT_ROWS = 1;
    var sizeX = 900;
    var sizeY = 700;
    var number = 0;
    
    let image_popup = document.querySelector('.image-popup');
    
    function createImg(){
        html = "<div class='img'></div>"
        var img = $(html);
        img.css("background-size", "cover");
        img.css("background-position", "center");
        img.css("width", sizeX + "px");
        img.css("height", sizeY + "px");
        img.appendTo("#photo");
        /*for(var j = 0; j < COUNT_ROWS; j++){
            for(var i = 0; i < COUNT_COLUMNS; i++){
                html = "<div class='img"+(j * COUNT_COLUMNS + i) +"'></div>"
                var img = $(html);
                img.css("background-position", "-"+i*sizeX/COUNT_COLUMNS+"px -"+j*sizeY/COUNT_ROWS+"px");
                img.css("width", sizeX/COUNT_COLUMNS+"px");
                img.css("height", sizeY/COUNT_ROWS+"px");
                img.appendTo("#photo");
            }
            var br = $("<br>");
            br.appendTo("#photo");
        }*/
        //str = "</div><br>";
        //tmp = $(str);
        //tmp.appendTo("#photo");
    }
          
    let image = document.querySelector('.photo');
    
    function showImg(imgId){
		image_popup.innerHTML = `
				<div class="con">
				    <img src="` + photos[imgId][0] + `" style="max-height: 90vh; max-width: 90vw;">
				</div>
		`;
					//<div id="photo"></div>
		image_popup.style.display = 'flex';
		//createImg();
		//number = imgId;
		//$(".img").css('background-image', 'url("'+photos[imgId][0]+'")')
		//$(".name").text(photos[number][1]);
        //$(".years").text(photos[number][2]);
		//for(var n = 0; n < COUNT_COLUMNS * COUNT_ROWS; n++){
		//    $(".img"+n).css('background-image', 'url("'+photos[imgId][0]+'")')
		//}
    }
    
    image_popup.onclick = e => {
    	/*if (e.target.className == 'image-popup') {
    	}*/
		image_popup.style.display = "none";
    };
    </script><?
    
    require_once 'footer.php';

?>