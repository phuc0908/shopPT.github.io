 <?php
  include "header.php";
  include "slideBar.php";
  include "class/Class_Type.php"
 ?>

 <?php
    $type = new Class_Type();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $type_name =$_POST['type_name'];
        $type->insert_type($type_name);
        
    }
 ?>

 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Danh Mục</h1>
          <form action="" method="POST">
            <input type="text" name="type_name" placeholder="Nhập tên danh mục" />
            <button class="bt_add_type"  type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>
