 <?php
  include "part/header.php";
  include "part/slideBar.php";
  include "Class/Class_User.php"
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
          $isSignIn  = '0';
          
          
          $user->insert($email,$phone,$pass,$firstName,$lastName,$address,$commune,$district,$province,$isSignIn);
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
            <input required type="text" name="lastName" placeholder="Họ..." /> 
            <input required type="text" name="firstName" placeholder="Tên..." /> <br>
            <input required type="text" name="email" placeholder="Email..." /> 
            <input required type="text" name="phone" placeholder="SDT..." /> <br>
            <input required type="text" name="pass" placeholder="Mật khẩu..." /><br>
            <input required type="text" name="province" placeholder="Tỉnh..." />  
            <input required type="text" name="district" placeholder="Huyện..." /> <br>
            <input required type="text" name="commune" placeholder="Xã..." /> 
            <input required type="text" name="address" placeholder="Địa chỉ..." />

            
           
            <button class="bt_add_type"  type="submit">Thêm</button>
          </form>
        </div>
      </div>
    </section>


  </body>
</html>
