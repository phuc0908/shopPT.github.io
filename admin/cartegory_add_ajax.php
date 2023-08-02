<?php
  include "Class/Class_Product.php";
  $product = new Class_Product();

 $type_id = $_GET['type_id'];

 ?>
        <option value="#" disabled selected>--Chọn loại sản phẩm</option>
        <?php 

        $show_cartegory_ajax = $product->get_cartegory_ofType($type_id);
        if($show_cartegory_ajax){
                
                while($result = $show_cartegory_ajax->fetch_assoc()){

        ?>
                <option value="<?php echo $result['ID']?>"><?php echo $result['Name']?></option>
        <?php
                }
        }
        ?>
