<?php
  include "header/header1.php";
 ?>
 <link rel="stylesheet" href="assets/CSS/signup.css">
 <?php
  include "header/header2.php";
 ?>
 <?php
    include "admin/Class/Class_User.php";
 
 ?>
 <?php
    $user = new Class_User();
    if(isset($_POST['email']) || isset($_POST['phone'])){
        if(isset($_POST['firstName'],$_POST['lastName'],$_POST['province'],$_POST['district']
                ,$_POST['commune'],$_POST['address'],$_POST['pass'],$_POST['re_pass'])){
            // 
            $email     = $_POST['email'];
            $phone     = $_POST['phone'];
            $firstName = $_POST['firstName'];
            $lastName  = $_POST['lastName'];
            $province  = $_POST['province'];
            $district  = $_POST['district'];
            $commune   = $_POST['commune'];
            $address   = $_POST['address'];
            $pass      = $_POST['pass'];
            $re_pass   = $_POST['re_pass'];

            if($pass === $re_pass){
                $user->insert($email,$phone,$pass,$firstName,$lastName,$address,$commune,$district,$province,'0');
                echo "<script>alert('Đăng ký thành công')</script>";
            }else{
                echo "<script>alert('Lỗi: Mật khẩu')</script>";
            }
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
                    <li><a href="signup.php ">Đăng Ký</a></li>
                </ul>
            </div>

            <div class="center-container">
                <form action="" method="post">
                <div class="container-signin">
                    <div class="infor_customer">
                        <label for="">Họ</label> <br />
                        <input type="text" name="lastName" id="" placeholder="Họ..." />
                    </div>

                    <div class="infor_customer">
                        <label for="">Tên</label> <br />
                        <input type="text" name="firstName" id="" placeholder="Tên..." />
                    </div>

                    <div class="infor_customer">
                        <label for="">Email</label> <br />
                        <input
                            type="email"
                            name="email"
                            id=""
                            placeholder="Email..."
                        />
                    </div>

                    <div class="infor_customer">
                        <label for="">Điện Thoại</label> <br />
                        <input
                            type="text"
                            name="phone"
                            id=""
                            placeholder="Số điện thoại..."
                        />
                    </div>

                    <div class="infor_customer">
                        <label for="">Tỉnh/TP</label> <br />
                        <input
                            type="text"
                            name="province"
                            id=""
                            placeholder="Tỉnh, TP..."
                        />
                    </div>

                    <div class="infor_customer">
                        <label for="">Quận/Huyện</label><br />
                        <input
                            type="text"
                            name="district"
                            id=""
                            placeholder="Quận, Huyện..."
                        />
                    </div>

                    <div class="infor_customer">
                        <label for="">Phường/Xã</label><br />
                        <input
                            type="text"
                            name="commune"
                            id=""
                            placeholder="Phường/Xã..."
                        />
                    </div>

                    <div class="infor_customer">
                        <label for="">Địa Chỉ</label><br />
                        <textarea name="address" id="" ></textarea>
                    </div>
                </div>

                <div class="container-signup">
                    <div class="password_customer">
                        <label for="">Mật Khẩu</label> <br />
                        <input
                            type="text"
                            name="pass"
                            id=""
                            placeholder="Mật Khẩu...."
                        />
                    </div>

                    <div class="password_customer">
                        <label for="">Nhập Lại Mật Khẩu</label> <br />
                        <input
                            type="text"
                            name="re_pass"
                            id=""
                            placeholder="Nhập Lại Mật Khẩu...."
                        />
                    </div>

                    <div class="password_customer">
                        <input type="checkbox" name="" id="" class="checkbox" />
                        <label for=""
                            >Đồng ý với các
                            <a href="" style="color: #d2660f">điều khoản</a> của
                            PT Shop</label
                        >
                        <br />
                        <input type="checkbox" name="" id="" class="checkbox" />
                        <label for="">Đăng ký nhận thông báo</label>
                    </div>

                    <div class="password_customer">
                        <button class="btn_signup">
                            <p style="font-size: 20px; color: gray">Đăng Ký</p>
                        </button>
                    </div>

                </div>
                </form>
                
            </div>
        </section>
        <?php
  include "footer/footer1.php";
 ?>

        <?php
  include "footer/footer2.php";
 

 ?>