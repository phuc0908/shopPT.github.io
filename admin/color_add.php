<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Color.php";

 ?>

 <?php
    $color = new Class_Color();
    $show_type =  $color->show_type();
   

    if(isset($_POST['product_id'],$_POST['color'],$_FILES['link_img'],$_FILES['link_img2'])){
      
      $product_id =$_POST['product_id'];
      $name_color=$_POST['color'];
      $img=$_FILES['link_img']['name'];
      $img2=$_FILES['link_img2']['name'];

        move_uploaded_file($_FILES['link_img']['tmp_name'],"upload/".$_FILES['link_img']['name']);
        move_uploaded_file($_FILES['link_img2']['tmp_name'],"upload/".$_FILES['link_img2']['name']);
        $color->insert($name_color,$img,$img2,$product_id);
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
        top : 200px;
     }
     form p{
      margin-top: 15px;
      font-size: small;
     }
     form div p::before{
      content: "*";
      color: red;
     }
 
      
    
 </style>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Ảnh</h1>
          <form action="" method="POST" enctype="multipart/form-data">
           
            <div >
              <select name="type_id" id="type_id">
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
              <select name="cartegory_id" id="cartegory_id">
                  <option value="#" >--Chọn loại sản phẩm</option>

              </select> <br>
        
              <select name="product_id" id="product_id">
                  <option value="#" >--Chọn sản phẩm</option>

              </select> <br>

              <input type="text" name="color" id="color" placeholder="Chọn màu">
              <input type="file" name="link_img" id="link_img">
              <input type="file" name="link_img2" id="link_img2">
            

              
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
            //
            $(document).ready(function(){
              $("#cartegory_id").change(function(){
                var x = $(this).val()
                $.get("product_add_ajax.php",{cartegory_id:x},function(data){
                  $("#product_id").html(data);
                })
              })
            })
            //
          })
        })
      })
      


    </script>
  </body>
</html>