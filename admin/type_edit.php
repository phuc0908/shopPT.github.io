<?php
  include "header.php";
  include "slideBar.php";
  include "Class/Class_Type.php"
 ?>
 <?php

?>

 <?php

    $type = new Class_Type();
    if(!isset($_GET['ID'])){
      // echo "<script>alert('Error');</script>";
      echo '<script>window.location = "type_list.php"</script>';
      
    }else{
      $ID_type = $_GET['ID'];
    }
    $get_type = $type->get($ID_type);
    if($get_type){
      $result = $get_type ->fetch_assoc();
    }
 ?>

 <?php
    $type = new Class_Type();

    if (isset($_POST["type_name"])) {

        $type_name =$_POST['type_name'];
        $type->update($type_name,$ID_type);       
    }   
 ?>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <input required type="text" name="type_name" placeholder="Nhập tên danh mục" value="
            <?php echo $result['Name']?>"/>
            <button onclick="" class="bt_add_type"  type="submit">Cập nhật</button>
          </form>
        </div>
      </div>
    </section>

    <script src="JS/script.js"></script>
  </body>
</html>
