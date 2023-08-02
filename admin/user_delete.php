<?php
  include "Class/Class_User.php";
  

 ?>
 <?php
    $user = new Class_User();

    if(!isset($_GET['ID'])){
        echo "<script>window.location = 'user_list.php</script>'";
      }else{
        $ID_User = $_GET['ID'];
      }
      $delete_User = $user->delete($ID_User);
      
 ?>

 
