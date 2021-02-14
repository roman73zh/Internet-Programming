<?php
  print_r($_FILES);
  $name = basename($_FILES['photo']["name"]);
  move_uploaded_file($_FILES['photo']["tmp_name"], "/sites/labs.zhitkov.rf/test-form/data/$name");
?>