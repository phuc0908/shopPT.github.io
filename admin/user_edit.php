 <?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_User.php"
 ?>

<?php

  $user = new Class_User();
  if(!isset($_GET['ID'])){
    echo '<script>window.location = "type_list.php"</script>';  
  }else{
    $ID_user = $_GET['ID'];
  }
  $get_user = $user->get($ID_user);

  if($get_user){
    $result = $get_user ->fetch_assoc();
    $name_get = $result['Name'];
    // Slice Name
    $arr_name = explode(' ', $name_get);
    $address_get = $result['Address'];
    $arr_add = explode(' / ', $address_get);

    // get endName
    $firstName_get = $arr_name[count($arr_name) - 1];
    // delete endName out arr
    $lastName_get_arr = array_slice($arr_name,0,-1);
    $lastName_get = implode(' ', $lastName_get_arr);

    // Address
    $province_get  = $arr_add[0];
    $district_get  = $arr_add[1];
    $commune_get   = $arr_add[2];
    $address_get   = $arr_add[3];
    


}
?>

 <?php
    $user = new Class_User();

    if(isset($_POST['email']) || isset($_POST['phone'])){
      if(isset($_POST['firstName'],$_POST['lastName'],$_POST['province'],$_POST['district']
              ,$_POST['commune'],$_POST['address'],$_POST['pass'])){
          // 
          $pass      = $_POST['pass'];
          $email     = $_POST['email'];
          $phone     = $_POST['phone'];
          $commune   = $_POST['commune'];
          $address   = $_POST['address'];
          $lastName  = $_POST['lastName'];
          $province  = $_POST['province'];
          $district  = $_POST['district'];
          $firstName = $_POST['firstName'];
          
          
          $user->update($email,$phone,$pass,$firstName,$lastName,$address,$commune,$district,$province,$ID_user);
      }
  }
        
 ?>
    
<style>
  input{
    margin: 20px;
    width: 100px;
  }
</style>


 <div class="admin-container-right">
        <div class="admin-container-type-add">
          <h1>Thêm Người dùng</h1>
          <form action="" method="POST">
            <input required type="text" name="lastName" placeholder="Họ..." value="<?php echo $lastName_get?>"/> 
            <input required type="text" name="firstName" placeholder="Tên..." value="<?php echo $firstName_get?>"/> <br>
            <input required type="text" name="email" placeholder="Email..." value="<?php echo $result['Email']?>"/> 
            <input required type="text" name="phone" placeholder="SDT..." value="<?php echo $result['Phone']?>"/> <br>
            <input required type="text" name="pass" placeholder="Mật khẩu..." value="<?php echo $result['Password']?>"/><br>
            <input required type="text" name="province" placeholder="Tỉnh..." value="<?php echo $province_get?>"/>  
            <input required type="text" name="district" placeholder="Huyện..." value="<?php echo $district_get?>"/> <br>
            <input required type="text" name="commune" placeholder="Xã..." value="<?php echo $commune_get?>"/> 
            <input required type="text" name="address" placeholder="Địa chỉ..." value="<?php echo $address_get?>"/>

            
           
            <button class="bt_add_type"  type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>


  </body>
</html>
