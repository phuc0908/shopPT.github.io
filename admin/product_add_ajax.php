<?php
  include "Class/Class_Color.php";
  $color = new Class_Color();

 $cartegory_id = $_GET['cartegory_id'];

 ?>
        <option value="#" disabled selected>--Chọn sản phẩm</option>
        <?php 

        $show_product_ajax = $color->get_product_ofCartegory($cartegory_id);
        if($show_product_ajax){
                
                while($result = $show_product_ajax->fetch_assoc()){

        ?>
                <option value="<?php echo $result['ID']?>"><?php echo $result['Name']?></option>
        <?php
                }
        }
        ?>