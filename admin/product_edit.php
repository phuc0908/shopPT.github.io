<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Product.php"
 ?>
 <?php

?>

 <?php

    $product = new Class_Product();
    

    if(!isset($_GET['ID'])){
      echo '<script>window.location = "cartegory_list.php"</script>';
      
    }else{
      $ID_product = $_GET['ID'];
// Value Product at ID
      $get_product = $product->get($ID_product);
      if($get_product){
        $result_product_atID = $get_product ->fetch_assoc();
      }
// Value Cartegory at Product_ID
      $ID_cartegory =$result_product_atID['ID_cartegory'];
      $get_cartegory = $product->get_cartegory( $ID_cartegory);
      if($get_cartegory){
        $result_cartegory = $get_cartegory->fetch_assoc();
      }
    // All Value type
    $show_cartegory = $product->show_cartegory();
    }
   
 ?>

 <?php
    $product = new Class_Product();

    if(isset($_POST['product_name'],$_POST['cartegory_id'],$_POST['price_product'],$_POST['price_product2'],
              $_POST['amount_product'])){
      
        $name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $price = $_POST['price_product'];
        $price2 = $_POST['price_product2'];
        $amount = $_POST['amount_product'];
        $cmt = $_POST['cmt_product'];

        // move_uploaded_file($_FILES['link_img']['tmp_name'],"upload/".$_FILES['link_img']['name']);
        // move_uploaded_file($_FILES['link_img2']['tmp_name'],"upload/".$_FILES['link_img2']['name']);

        $product->update($ID_product,$name,$cartegory_id,$price,$price2,$amount,$cmt);
    }  
 ?>
 <style>
     select{
        height: 30px;
        margin-top: 15px;
        width: 200px;
     }
     form{
        display: flex;
        position: relative;
     }
     form div textarea{
        margin: 16px 30px;
        height: 230px;
        width: 700px;
        padding: 12px 20px;
        font-size: 16px;
        resize: none;
        border-radius: 4px;
        border: 1px solid;
     }
     form button{
        position: absolute;
        top : 320px;
     }
     
    
 </style>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Sửa Sản Phẩm</h1>
          <form action="" method="POST">
           
          <div >
            <select name="cartegory_id" id="">
                <option value="#" disabled>--Chọn loại sản phẩm</option>
                <option value="#" selected disabled><?php echo $result_cartegory['Name'] ?></option>

                <?php 
                if($show_cartegory){
                    while($result = $show_cartegory->fetch_assoc()){
 
                ?>
                <option value="<?php echo $result['ID']?>"><?php echo $result['Name']?></option>
                <?php
                   }
                }
                ?>
            </select> <br>
            
            <input required type="text" name="product_name" placeholder="Nhập tên sản phẩm" value="<?php echo $result_product_atID['Name'] ?>"/> <br>
            <input required type="number" name="price_product" placeholder="Nhập giá trước sale (VNĐ)" min="0" value="<?php echo $result_product_atID['Price'] ?>" > <br>
            <input required type="number" name="price_product2" placeholder="Nhập giá sau sale (VNĐ)" min="0" value="<?php echo $result_product_atID['PriceAfterSale'] ?>"> <br>
            <input required type="number" name="amount_product" id="" placeholder="Nhập số lượng " min="0" value="<?php echo $result_product_atID['Amount'] ?>"> <br>
                
        </div>
        <div class="txt_area">
            <textarea name="cmt_product" id="" placeholder="Nhập phần giới thiệu" value="<?php echo $result_product_atID['details'] ?>"></textarea>
            
        </div>
        <button class="bt_add_type"  type="submit">cập nhật</button>
           
            
          </form>
        </div>
      </div>
    </section>


  </body>
</html>