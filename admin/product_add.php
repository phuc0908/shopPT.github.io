<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Product.php";

 ?>

 <?php
    $product = new Class_Product();
    $show_type =  $product->show_type();
   

    if(isset($_POST['product_name'],$_POST['cartegory_id'],$_POST['price_product'],$_POST['price_product2'],
              $_POST['amount_product'])){
      
        $name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $price = $_POST['price_product'];
        $price2 = $_POST['price_product2'];
        $amount = $_POST['amount_product'];
        $cmt = $_POST['cmt_product'];

        $product->insert($name,$cartegory_id,$price,$price2,$amount,$cmt);
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
        margin: -5px 30px;
        height: 215px;
        width: 700px;
        padding: 12px 20px;
        font-size: 16px;
        resize: none;
        border-radius: 4px;
        border: 1px solid;
     }
    
     form button{
        position: absolute;
        top : 370px;
     }
     form p{
      margin-top: 15px;
      font-size: small;
     }
     form div p::before{
      content: "*";
      color: red;
     }
     form .txt_area p{
      margin: 10px 20px;
     }
     form .txt_area p::before{
      content: "*";
      color: rgb(0, 140, 186);
     }
    
    
     
    
 </style>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Sản Phẩm</h1>
          <form action="" method="POST" enctype="multipart/form-data">
           
          <div >
            <select name="type_id" id="type_id">
                <option value="#" disabled selected >--Chọn danh mục</option>

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
            <select name="cartegory_id" id="cartegory_id">
                <option value="#" >--Chọn loại sản phẩm</option>

            </select> <br>
            <input required type="text" name="product_name" placeholder="Nhập tên sản phẩm" /> <br>
            <input required type="number" name="price_product" placeholder="Nhập giá trước sale(VNĐ)" min="0"> <br>
            <input required type="number" name="price_product2" placeholder="Nhập giá sau sale (VNĐ)" min="0"> <br>
            <input required type="number" name="amount_product" id="" placeholder="Nhập số lượng " min="0"> <br>
            
        </div>
        <div class="txt_area">
        <p>Mô tả sản phẩm</p>
            <textarea name="cmt_product" id="" placeholder="Nhập phần giới thiệu"></textarea>
            
        </div>
        <button class="bt_add_type"  type="submit">Thêm</button>
           
            
          </form>
        </div>
      </div>
    </section>



    <script >
      $(document).ready(function(){
        $("#type_id").change(function(){
          var x = $(this).val()
          $.get("cartegory_add_ajax.php",{type_id:x},function(data){
            $("#cartegory_id").html(data);
          })
        })
      })


    </script>
  </body>
</html>