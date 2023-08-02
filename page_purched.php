<?php
include "admin/Class/Class_Product.php"  ;
?>
<?php
include "header/header1.php";
?>
  <link rel="stylesheet" href="assets/CSS/page_purched.css">
  <link rel="stylesheet" href="assets/CSS/index.css">
<?php
include "header/header2.php";
?>
  

    <section class="container">
        <div class="top-container">
            <ul>
                <li><a href="cartegory.html">Trang Chủ</a></li>
                <ion-icon name="chevron-forward-outline"></ion-icon>
                <li><a href="cartegory.html">Thông tin tài khoản</a></li>
            </ul>
        </div>
        <h1 style="font-weight: 900; margin-bottom: 30px;margin-left: 30px;">Đặt Hàng</h1>
        <div class="center-container">
        
            <div class="purched">
                <div class="infor_purched">
                    <div class="address_ship" >
                        <h3>Địa Chỉ Giao Hàng</h3>
                        <ul style="border: 1px solid #cccc; padding: 20px 0 20px 20px;margin: 15px;border-radius: 4px;">
                            <li><b>Ba</b> <b style="color: #ef660b; margin-left: 20px;">Cơ Quan</b></li>
                            <li><p>Điện Thoại : 078576857</p> </li>
                            <li><p>Đia Chỉ : 34 Trần Hưng Đạo ,Nguyễn An Ninh TP Vũng Tàu   </p></li>
                        </ul>
                    </div>

                    <div class="function_ship">
                        <h3>Phương Thức Giao Hàng</h3>
                        <ul >
                            <li style="border: 1px solid #cccc; padding: 20px 0 20px 20px;margin: 15px;border-radius: 4px;">
                                <p><i class="fa-solid fa-circle-check"></i>
                                   Chuyển Phát Nhanh 
                                </p>
                                <p>
                                    Thời gian giao hàng dự kiến : Thứ 3,20/06/2023
                                </p>

                            </li>

                            <li style="border: 1px solid #cccc; padding: 20px 0 20px 20px;margin: 15px;border-radius: 4px;">
                                <p><i class="fa-solid fa-circle-check"></i>
                                    Tôi đồng ý với <a href="" style="text-decoration:underline;">chính sách giao vận chuyển </a>
                                    của PT shop 
                                 </p>
                                 
                            </li>

                            <li style="border: 1px solid #cccc; padding: 20px 0 20px 20px;margin: 15px;border-radius: 4px;">
                                <p><i class="fa-solid fa-circle-check"></i>
                                   Tôi đã ra soát và xác nhận thông tin chi tiết về giao dịch này
                                 </p>
                                 
                            </li>
                        </ul>
                    </div>

                </div>
                
                <div class="fix_purched" style="margin-bottom: 40px;">
                    <a href="" style="text-decoration: underline;">Chọn địa chỉ khác</a>
                    <button style="margin-left: 275px;">Thêm Địa Chỉ</button>
                </div>

                <div class="function_purched">
                    <h3>Phương Thức Thanh Toán</h3>
                    <ul style="border: 1px solid #cccc; padding: 20px 0 20px 20px;margin: 15px;border-radius: 4px;">
                        <li>
                            Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại
                        </li>

                        <li>
                            <input type="radio" name="1" id="">
                            <label for="">Thanh toán bằng thẻ tín dụng 
                                <i class="fa-brands fa-cc-visa" style="color: #0656e0;"></i>
                                <i class="fa-brands fa-cc-mastercard"></i>
                            </label>
                        </li>

                        <li>
                            <input type="radio" name="1" id="">
                            <label for="">Thanh toán bằng thẻ ATM</label>
                            <p style="font-size: 14px;">Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến</p>
                        </li>

                        <li>
                            <input type="radio" name="1" id="">
                            <label for="">Thanh toán khi giao hàng</label>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="bill_purched" >
               <div class="bill">
                    <div class="infor_bill">
                        <h3>Tóm tắt đơn hàng</h3>
                        <ul>
                            <li><span>Tổng sản phẩm:</span> <span>1</span></li>
                            <li><span>Tổng tiền hàng:</span> <span >699.000đ</span></li>
                            <li><span>Giảm Voucher:</span> <span >0đ</span></li>
                            <li><span>Tạm Tính:</span> <span >699.000đ</span></li>
                            <li><span>Phí vận chuyển:</span> <span>33.000đ</span></li>
                            <li><span>Tiền thanh toán:</span> <span>732.000đ</span></li>
                        </ul>
                    </div>

                    <div class="sale_shop">
                        <h3>Mã Giãm Giá</h3>
                        <ul>
                            <li>
                                <input type="text" name="" id="" placeholder="Mã Áp Dụng">
                                <button>Áp Dụng</button>
                            </li>
                            <li>
                                <select name="" id="">
                                    <option value="">Mã Nhân Viên Hỗ Trợ</option>
                                </select>
                            </li>   
                        </ul>
                        
                    </div>
               </div>

               <div class="btn-order">
                       <a href=""><h1>Đặt Hàng</h1></a>
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