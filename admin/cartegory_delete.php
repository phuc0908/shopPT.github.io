<?php
  include "Class/Class_Cartegory.php";
  

 ?>
 <?php
    $cartegory = new Class_Cartegory();

    if(!isset($_GET['ID'])){
        echo "<script>window.location = 'cartegory_list.php</script>'";
      }else{
        $ID_cartegory = $_GET['ID'];
      }
      $delete_cartegory = $cartegory->delete($ID_cartegory);
      
 ?>