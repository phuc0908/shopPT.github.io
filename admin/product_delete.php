<?php
  include "Class/Class_Product.php";
  

 ?>
 <?php
    $product = new Class_Product();

    if(!isset($_GET['ID'])){
        echo "<script>window.location = 'type_list.php</script>'";
      }else{
        $ID_product = $_GET['ID'];
      }
      $delete_product = $product->delete($ID_product);
      
 ?>