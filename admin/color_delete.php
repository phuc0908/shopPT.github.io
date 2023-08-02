<?php
  include "Class/Class_Color.php";
  

 ?>
 <?php
    $color = new Class_Color();

    if(isset($_GET['ID'])){
        $ID_color = $_GET['ID'];  
        $delete_color = $color->delete($ID_color);     
    }else{
        echo "<script>window.location = 'color_list.php</script>'";
    }
    
    
 
      
 ?>