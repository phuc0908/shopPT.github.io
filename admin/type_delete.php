<?php
  include "Class/Class_Type.php";
  

 ?>
 <?php
    $type = new Class_Type();

    if(!isset($_GET['ID'])){
        echo "<script>window.location = 'type_list.php</script>'";
      }else{
        $ID_type = $_GET['ID'];
      }
      $delete_type = $type->delete($ID_type);
      
 ?>

 
