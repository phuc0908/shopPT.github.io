<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Type.php"
 ?>

 <?php
    $type = new Class_Type();
    $show_result = $type->show();      
 ?>
  <style>
  table{
    width: 1000px;
  }
 
  td {
  white-space: nowrap;
  }

 </style>

 <div class="admin-container-right">
    <div class="admin-container-type-list">
          <h1>Danh Sách Danh Mục</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Tên</th>
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
              <td><a href="type_edit.php?ID=<?php echo $result['ID'] ?>">Sửa</a> | <a href="type_delete.php?ID=<?php echo $result['ID'] ?>">Xóa</a></td>
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
