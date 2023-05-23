<?php
  include "Class/Class_Cartegory.php";
  

 ?>
 <?php
    $type = new Class_Cartegory();

    if(!isset($_GET['ID'])){
        echo "<script>window.location = 'type_list.php</script>'";
      }else{
        $ID_cartegory = $_GET['ID'];
      }
      $delete_cartegory = $type->delete($ID_cartegory);
      
 ?>