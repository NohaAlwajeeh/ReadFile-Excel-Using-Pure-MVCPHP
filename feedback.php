<?php

include 'indexcontroller.php';

if(isset($_POST['submit'])){
    $upload=new read_file_excel();
    $sucess=$upload->uploadFile();
   echo '<div class="alert alert-success">
  <strong>Success!</strong> inserted successfully
</div>';
    echo '<div class="alert alert-info">
  <strong>Info!</strong> you will be redirected after 3 second 
</div>';


 header( "refresh:3;url=showTable.php" );
}
?>
