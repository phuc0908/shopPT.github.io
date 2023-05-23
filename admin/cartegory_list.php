<?php
  include "header.php";
  include "slideBar.php";
  include "Class/Class_Cartegory.php";
  
 ?>

 <?php
    $cartegory = new Class_Cartegory();

    $show_result = $cartegory->show();
          
 ?>

 <div class="admin-container-right">
    <div class="admin-container-type-list">
          <h1>Danh Sách Loại Sản Phẩm</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Tên</th>
              <th>ID Danh Mục</th>
              <th>Tùy Biến</th>
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
              <td><?php echo $result['Name']?></td>
              <td><?php echo $result['ID_type']?></td>
              <td><a href="cartegory_edit.php?ID=<?php echo $result['ID'] ?>">Sửa</a> | <a href="cartegory_delete.php?ID=<?php echo $result['ID'] ?>">Xóa</a></td>
            </tr>
            <?php
               }
            }
            ?>
          </table>
        </div>
      </div>
    </section>

    <script src="JS/script.js"></script>
  </body>
</html>
