 <?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Type.php"
 ?>

 <?php
    $type = new Class_Type();

    if (isset($_POST["type_name"])) {

      $type_name =$_POST['type_name'];
      $type->insert($type_name);   
    } 
        
 ?>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <input required type="text" name="type_name" placeholder="Nhập tên danh mục" />
            <button class="bt_add_type"  type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>


  </body>
</html>
