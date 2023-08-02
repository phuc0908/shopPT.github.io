<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Cartegory.php";

 ?>

 <?php
    $cartegory = new Class_Cartegory();
    $show_type = $cartegory->show_type();

    if(isset($_POST['cartegory_name'],$_POST['type_id'])){
        $name = $_POST['cartegory_name'];
        $type_id = $_POST['type_id'];
        $cartegory->insert($name,$type_id);
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
          <h1>Thêm Loại Sản Phẩm</h1>
          <form action="" method="POST">
           
          <select name="type_id" id="">
                <option value="#" >--Chọn danh mục</option>

                <?php 
                if($show_type){
                    while($result = $show_type->fetch_assoc()){
 
                ?>
                <option value="<?php echo $result['ID']?>"><?php echo $result['Name']?></option>
                <?php
                   }
                }
                ?>
            </select> <br>
            <input required type="text" name="cartegory_name" placeholder="Nhập tên loại sản phẩm" />
           
             <button class="bt_add_type"  type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>

  
  </body>
</html>