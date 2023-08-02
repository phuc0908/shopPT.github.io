<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Color.php";
  
 ?>

 <?php
    $color = new Class_Color();

    $show_result = $color->show();
          
 ?>
 <style>
 
  td {
  white-space: nowrap;
  }

 </style>

 <div class="admin-container-right">
    <div class="admin-container-type-list">
          <h1>Danh Sách Ảnh Sản Phẩm</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Danh Mục</th>
              <th>Loại Sản Phẩm</th>
              <th>Tên Sản Phẩm</th>
              <th>Tên Color</th>
              <th>Link Ảnh</th>
              <th>Link Ảnh 2</th>
              <th>Tùy biến</th>
              
            </tr>
            <?php
            if($show_result){
                $i=0;
                while($result = $show_result->fetch_assoc()){
                    $i++;
            ?>
            <tr>
              <td><?php echo $i?></td>
              <td><?php echo $result['ID']?></td>
              <td><?php echo $result['N_type']?></td>
              <td><?php echo $result['N_cart']?></td>
              <td><?php echo $result['N_pro']?></td>
              <td><?php echo $result['Name']?></td>
              <td class="img"><?php echo $result['Img']?></td>
              <td class="img"><?php echo $result['Img2']?></td>
              <td><a href="color_edit.php?ID=<?php echo $result['ID'] ?>">Sửa</a> | <a href="color_delete.php?ID=<?php echo $result['ID'] ?>">Xóa</a></td>
            </tr>
            <?php
               }
            }
            ?>
          </table>
        </div>
      </div>
    </section>

  </body>
</html>
