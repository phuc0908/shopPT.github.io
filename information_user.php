<?php 
include "admin/Class/Class_User.php";
?>
<?php
include "header/header1.php";
?>
<link rel="stylesheet" href="assets/CSS/info_users.css">
<?php
include "header/header2.php";
?>
<?php 
    $user = new Class_User();
   
    $get_user = $user->getUserTRUE() ;
    $result = $get_user->fetch_assoc(); 
    
    
?>
<h2 style="padding: 120px 0 0 30px">Thông Tin Tài Khoản</h2>

        <section class="container">
            <div class="left-container" style="position: relative;">
                <ul >
                    <li style="font-weight: bold">
                        <span><ion-icon name="person-circle"></ion-icon></span
                        >Thông tin tài khoản
                    </li>
                    <li>
                        <span><ion-icon name="dice"></ion-icon></span>Ưu đãi cho
                        bạn
                    </li>
                    <li>
                        <span><ion-icon name="heart"></ion-icon></span>Sản phẩm
                        yêu thích
                    </li>
                    <li style="position: absolute;bottom: 0;">
                        <a href="user_setout.php?ID=<?php echo $result['ID']?>"><span><ion-icon name="log-out"></ion-icon></span>Đăng xuất</a>
                    </li>
                </ul>
            </div>
            <div class="right-container">
                <div class="right-con top">
                    <div>
                        <h3>Thông tin tài khoản</h3>
                        <p>Tên : <?php if($result){
                            echo $result['Name'];
                            
                        }
                        ?></p>
                        <p>Email : <?php if($result){
                            echo $result['Email'];
                        }
                        ?></p>
                        <p>Điện thoại : <?php if($result){
                            echo $result['Phone'];
                        }
                        ?></p>
                    </div>
                </div>
                <div class="right-con bot">
                    <h3>Địa chỉ nhận hàng</h3>
                    <div>
                        <p>Tên : <?php if($result){
                            echo $result['Name'];
                        }
                        ?></p>
                        <p>
                            Đại chỉ: <?php if($result){
                            echo $result['Address'];
                        }
                        ?>
                        </p>
                        <p>Điện thoại : <?php if($result){
                            echo $result['Phone'];
                        }
                        ?></p>
                    </div>
                </div>
            </div>
        </section>

        <?php
  include "footer/footer1.php";
 ?>
        <?php
  include "footer/footer2.php";
 ?>
      