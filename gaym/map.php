<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once '../vendor/updatetime.php';
    }
    else {
        header('Location: ../auth.php');
    }
    
    require_once '../header.php';
    echo '
        <link href="/gallery/css/style.css?v15" rel="stylesheet" type="text/css">
        <style type="text/css" media="screen">
            object { outline:none; }
        </style>
        <link href="map.css?v28" rel="stylesheet" type="text/css">
        
        <div style="text-align: center; font-size: 20px;" class="conteiner">
            <label id="find">Нажмите на любой регион, чтобы начать</label>
        </div>
        
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">
                        Интереснейшая история очередного, никому не нужного, региона...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- start Fla-shop.com HTML5 Map -->
        <div style="position: relative; width: 80%; margin: 0 auto;">
        	<script type="text/javascript" src="raphael.min.js?v2"></script>
        	<script>';
        include 'get-settings.php';
        echo '</script>
        	<script type="text/javascript" src="map.js?v90"></script>
        	<script type="text/javascript" src="showWindow.js?v45"></script>
        </div>
        <!-- end HTML5 Map -->';
    ?>
    <div class="image-popup"></div>
    <script>
    
    let image_popup = document.querySelector('.image-popup');
          
    let image = document.querySelector('.photo');
    
    function showImg(){
		image_popup.innerHTML = `
				<div class="con">
					<div id="photo"></div>
				</div>
		`;
		image_popup.style.display = 'flex';
    }
    
    image_popup.onclick = e => {
		image_popup.style.display = "none";
    };
    </script>
    <?
        
    require_once '../footer.php';

?>