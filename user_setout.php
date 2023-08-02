<?php
  include "admin/Class/Class_User.php";
  

 ?>
 <?php
    $user = new Class_User();

    if(isset($_GET['ID'])){
      $ID_User = $_GET['ID'];
      $delete_User = $user->setSignIn_O($ID_User);
    }

 ?>

 
