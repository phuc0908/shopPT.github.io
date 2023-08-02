<?php
 include "part/header.php";
 include "part/slideBar.php";
  include "Class/Class_Cartegory.php"
 ?>
 <?php

?>

 <?php

    $cartegory = new Class_Cartegory();
    

    if(!isset($_GET['ID'])){
      echo '<script>window.location = "cartegory_list.php"</script>';
      
    }else{
      $ID_cartegory = $_GET['ID'];
// Value Cartegory at ID
      $get_cartegory = $cartegory->get($ID_cartegory);
      if($get_cartegory){
        $result = $get_cartegory ->fetch_assoc();
      }
// Value Type at ID
      $ID_type =$result['ID_type'];
      $get_type = $cartegory->get_type( $ID_type);
      if($get_type){
        $result_type = $get_type ->fetch_assoc();
      }
    // All Value type
    $show_type = $cartegory->show_type();
    }
   
 ?>

 <?php
    $cartegory = new Class_cartegory();

    if (isset($_POST["cartegory_name"],$_POST["type_id"])) {

        $cartegory_name =$_POST['cartegory_name'];
        $type_id =$_POST['type_id'];
        $cartegory->update($ID_cartegory,$cartegory_name,$type_id);       
    }   
 ?>
  <style>
     select{
        height: 30px;
        margin-top: 15px;
        width: 200px;
     }
 </style>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Sửa Danh Mục</h1>
          <form action="" method="POST">
            <!--  -->
          <select name="type_id" id="">
                <option disabled value="#" >--Chọn danh mục</option>
                <option selected disabled value="<?php echo $result_type['ID']?>" ><?php echo $result_type['Name']?></option>
                <?php 
                if($show_type){
                    While($result_show_type = $show_type->fetch_assoc()){
                 
                ?>
                <option value="<?php echo $result_show_type['ID']?>"><?php echo $result_show_type['Name']?></option>
                <?php
                      
                    }
                }
                ?>
            </select> <br>
            <!--  -->

            <input required cartegory="text" name="cartegory_name" placeholder="Nhập tên danh mục" value="
            <?php echo $result['Name']?>"/>
            <button onclick="" class="bt_add_cartegory"  cartegory="submit">Cập nhật</button>
          </form>
        </div>
      </div>
    </section>

   
  </body>
</html>