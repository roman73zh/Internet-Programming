<?php
$link=mysqli_connect("localhost", "Projects_fuck", "28003208Fuck", "Projects_hist_data");
$images = mysqli_fetch_all($query = mysqli_query($link, 'SELECT * FROM images ORDER BY uploaded_date ASC'), 1);
require_once '../header.php';
$i = 0;
?>

	<body>
	    
	    
	<link href="css/style.css?v15" rel="stylesheet" type="text/css">

    <div class="content home">
    	<h2>Правители</h2>
    	<p>Здесь представлены те, кто управлял нашей страной начиная с эпохи Большевиков.</p>
    	<div class="images">
    		<?php foreach ($images as $image): ?>
    		<a href="javascript:showImg(<?=$i?>)">
    			<img src="<?=$image['path']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
    			<span><?=$image['description']?></span>
    		</a>
    		<?php $i++; endforeach; ?>
    	</div>
    </div>
    <div class="image-popup"></div>
    
    <script>
    
    var photos = [
        
    <?php foreach ($images as $image){
        print('["'.$image['path'].'", "'.$image['title'].'", "'.$image['description'].'"], ');
    }?>"end"];
    
    const COUNT_COLUMNS = 27;
    const COUNT_ROWS = 18;
    var sizeX = 900;
    var sizeY = 600;
    var number = 0;
    
    let image_popup = document.querySelector('.image-popup');
    
    function createImg(){
        for(var j = 0; j < COUNT_ROWS; j++){
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
        }
        str = "</div><br>";
        tmp = $(str);
        tmp.appendTo("#photo");
    }
         
          
    function replaceImgRight(i){
        $(".img"+i).fadeOut(5, function(){
            if((i % COUNT_COLUMNS) != COUNT_COLUMNS - 1)
            replaceImgRight(i + 1);
            if((i % COUNT_COLUMNS) == 0)
                replaceImgRight(i + COUNT_COLUMNS);
            $(".img"+i).css('background-image', 'url("'+photos[number][0]+'")')
            $(".img"+i).fadeIn(500, function(){});
        })
    }  
    
    
        function replaceImgLeft(i){
        $(".img"+i).fadeOut(5, function(){
            if((i % COUNT_COLUMNS) != 0)
            replaceImgLeft(i - 1);
            if((i % COUNT_COLUMNS) == COUNT_COLUMNS - 1)
                replaceImgLeft(i + COUNT_COLUMNS);
            $(".img"+i).css('background-image', 'url("'+photos[number][0]+'")')
            $(".img"+i).fadeIn(500, function(){});
        })
    }  
    
    
    let image = document.querySelector('.photo');
    function showImg(imgId){
		image_popup.innerHTML = `
				<div class="con">
					<h3 class="name">Имя</h3>
					<p class="years">Годы</p>
					<a href="javascript:move_left()" id="change_link_left"></a>
					<a href="javascript:move_right()" id="change_link_right"></a>
					<div id="photo"></div>
				</div>
		`;
		image_popup.style.display = 'flex';
		createImg();
		number = imgId;
		$(".name").text(photos[number][1]);
        $(".years").text(photos[number][2]);
		for(var n = 0; n < COUNT_COLUMNS * COUNT_ROWS; n++){
		    $(".img"+n).css('background-image', 'url("'+photos[imgId][0]+'")')
		}
    }
    

    function move_left(){
            number--;
            if(number < 0)
                number = photos.length - 2;
            $(".name").text(photos[number][1]);
            $(".years").text(photos[number][2]);
    		replaceImgLeft(COUNT_COLUMNS - 1);
    }
    function move_right(){
            number++;
            if(number > photos.length - 2)
                number = 0;
            $(".name").text(photos[number][1]);
            $(".years").text(photos[number][2]);
    		replaceImgRight(0);
    }
    
    image_popup.onclick = e => {
    	if (e.target.className == 'image-popup') {
    		image_popup.style.display = "none";
    	}
    };
    </script

    </body>
</html>

<?require_once '../footer.php';?>