<?php
  include "header/header1.php";
?>
<link rel="stylesheet" href="assets/CSS/signin.css">
<?php
  include "header/header2.php";
?>
<?php
     include "admin/Class/Class_User.php";

?>
<?php

    $user = new Class_User();
    $ID;
    $count = 0;
    $all_user = $user->show();

    if(isset($_POST['pass'], $_POST['phone'])){
        $pass = $_POST['pass'];
        $phone = $_POST['phone']; 
        if($all_user){
            while($result = $all_user->fetch_assoc()){
                if($phone === $result['Phone'] && $pass === $result['Password']){
                    $count++;
                    $ID=$result['ID'];
                    break;
                }
            }
        }
        if ($count == 1) {
            $setF = $user->setisSignInAllFalse();
            $setT = $user->setisSignInTRUE($ID);
            echo "<script>window.location.href = 'information_user.php';</script>";   
        }else {
            echo "<script> alert('Tài khoản đăng nhập không chính xác')</script>";
        }
    }

 ?>
        <section class="container">
            <div class="top-container">
                <ul>
                    <li>
                        <a href="index.php">Trang Chủ</a>
                    </li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <li>
                        <a href="signin.php">Đăng Nhập</a>
                    </li>
                </ul>
            </div>

            <div class="center-container">

                    <form class="container-signin" method="post">
                        <div class="background-login">
                            <h1>Bạn đã có tài khoản PT ?</h1>
                            <p>
                                Nếu bạn đã có tài khoản, hãy đăng nhập đễ tích lũy
                                điểm thành viên và nhận được những ưu đãi tốt hơn!
                            </p>
                            <div
                                style="display: flex; flex-direction: column"
                            >
                                <input
                                    type="text"
                                    name="phone"
                                    id=""
                                    class="input-phone"
                                    placeholder="Số Điện Thoại"
                                />

                                <input
                                    type="text"
                                    name="pass"
                                    id=""
                                    class="input-password"
                                    placeholder="Mật Khẩu"
                                />
                            </div>
                            <input type="checkbox" name="" id="" />
                            <label for="">Ghi Nhớ Đăng Nhập</label>
                            <div class="btn-signin">
                                <a href="">Quên Mật Khẩu</a>
                                <button class="button-signin" type="submit">
                                    <a href=""
                                        ><span style="color: #fff; font-size: 16px"
                                            >Đăng Nhập</span
                                        ></a
                                    >
                                </button>
                            </div>
                        </div>
                    </form>

                <div class="container-signup">
                    <div class="background-signup">
                        <h1>Tạo Tài Khoản Mới</h1>
                        <p>
                            Trở thành Thành Viên PT SHOP dể nhận được thông báo
                            mới của shop
                        </p>
                        <p>
                            <i
                                class="fa-sharp fa-solid fa-circle-check"
                                style="color: #1f5129"
                            ></i
                            >Tích Điểm Tự Động
                        </p>
                        <p>
                            <i
                                class="fa-sharp fa-solid fa-circle-check"
                                style="color: #1f5129"
                            ></i
                            >Nhiều Ưu Đãi Đặc Biệt
                        </p>
                        <p>
                            <i
                                class="fa-sharp fa-solid fa-circle-check"
                                style="color: #1f5129"
                            ></i
                            >Thông Tin Mới Nhất
                        </p>
                        <a href="signup.php"
                            ><button class="button-signup">
                                <span style="color: #fff; font-size: 16px"
                                    >Đăng Ký</span
                                >
                            </button></a
                        >
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
