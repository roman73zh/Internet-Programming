<?php
    $link=mysqli_connect("localhost", "Projects_fuck", "28003208Fuck", "Projects_hist_data");
    $id = $_POST['id'];

    $results = mysqli_fetch_assoc($query = mysqli_query($link, "SELECT title, body FROM history WHERE id=$id"));
    echo json_encode($results);
    
    //$stmt = $db->prepare('SELECT title FROM history WHERE id=:id');
    //$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    //$result = $stmt->execute();
    //echo $result->fetchArray(SQLITE3_ASSOC);