<?php
    session_start();
    
    if (!$_SESSION['user']) {
        header('Location: ../auth.php');
    }
    
    require_once '../header.php';
    echo '
        <style type="text/css" media="screen">
            object { outline:none; }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="map.css?v40" rel="stylesheet" type="text/css">
        <!--<script type="text/javascript" src="jquery-3.6.0.js"></script>-->
        
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="position: relative; width: 80%; margin: 0 auto;">
        	<script type="text/javascript" src="raphael.min.js?v2"></script>
        	<script>';
        include 'get-settings.php';
        echo '</script>
        	<script type="text/javascript" src="map.js?v58"></script>
        	<script type="text/javascript" src="showWindow.js?v28"></script>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>-->';
        
        if ($_SESSION['user']['admin'] == '1') {
            echo '<a href="editor.php" style="margin-left: 10%;">Редактор карты</a>';
        }
    
    require_once '../footer.php';

?>