<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once '../vendor/updatetime.php';
    }
    
    require_once '../header.php';
    echo '
        <style type="text/css" media="screen">
            object { outline:none; }
        </style>
        <link href="map.css?v28" rel="stylesheet" type="text/css">
        
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
        	<script type="text/javascript" src="map.js?v58"></script>
        	<script type="text/javascript" src="showWindow.js?v28"></script>
        </div>
        <!-- end HTML5 Map -->';
        
    if ($_SESSION['user']['admin'] == '1') {
            echo '<a href="editor.php" style="margin-left: 10%;">Редактор карты</a>';
    }
        
    require_once '../footer.php';

?>