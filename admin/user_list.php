<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_User.php"
 ?>

 <?php
    $user = new Class_User();
    $show_result = $user->show();      
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
          <h1>Danh Sách Người Dùng</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Tên</th>
              <th>Email</th>
              <th>SDT</th>
              <th>Địa Chỉ</th>
              <th>Mật Khẩu</th>
              <th>Đã đăng nhập</th>
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
              <td><?php echo $result['Email']?></td>
              <td><?php echo $result['Phone']?></td>
              <td><?php echo $result['Address']?></td>
              <td><?php echo $result['Password']?></td>
              <td><?php echo $result['isSignIn']?></td>
              <td><a href="user_edit.php?ID=<?php echo $result['ID'] ?>">Sửa</a> | <a href="user_delete.php?ID=<?php echo $result['ID'] ?>">Xóa</a></td>
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
