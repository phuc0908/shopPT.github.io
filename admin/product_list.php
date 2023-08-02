<?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_Product.php";
  
 ?>

 <?php
    $product = new Class_Product();

    $show_result = $product->show();
          
 ?>
  <style>
  td {
  white-space: nowrap;
  }

 </style>

 <div class="admin-container-right">
    <div class="admin-container-type-list">
          <h1>Danh Sách Loại Sản Phẩm</h1>
          <table>
            <tr>
              <th>STT</th>
              <th>ID</th>
              <th>Tên</th>
              <th>Loại Sản Phẩm</th>
              <th>Giá (VNĐ)</th>
              <th>Giá sau Sale (VNĐ)</th>
              <th>Số Lượng</th>
              <th>Comment</th>
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
              <td><?php echo $result['name_cartegory']?></td>
              <td><?php echo $result['Price']?></td>
              <td><?php echo $result['PriceAfterSale']?></td>
              <td><?php echo $result['Amount']?></td>
              <td><?php echo $result['details']?></td>
              <td><a href="product_edit.php?ID=<?php echo $result['ID'] ?>">Sửa</a> | <a href="product_delete.php?ID=<?php echo $result['ID'] ?>">Xóa</a></td>
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
