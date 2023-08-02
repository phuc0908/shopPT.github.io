
<?php
 
 ?>
<?php
  include "header/header1.php";
 ?>
 <link rel="stylesheet" href="assets/CSS/product.css">
 <?php
  include "header/header2.php";
  
 ?>
 <?php
    include "admin/Class/Class_Color.php";
 ?>

<?php
     $color = new Class_Color();

    if(!isset($_GET['ID'])){
        echo '<script>window.location = "index.php"</script>';
    }else{    
        $ID_color = $_GET['ID'];
        $get_product= $color->show_product_onWeb_product($ID_color);
        if($get_product){
            $result =$get_product->fetch_assoc();
        }
    }
?>

        <section class="container">
            <div class="top-container">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <li><a href="product_all.php">Tất cả sản phẩm</a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <li><a href=""><?php echo $result['name_cart']?> </a></li>
                </ul>
            </div>

            <div class="center-container" >
                <div class="pic-product">
                    <img src="admin/upload/<?php echo $result['Img']?>" alt="" />
                    <img
                        src="admin/upload/<?php echo $result['Img2']?>"
                        alt=""
                        class="pic-two"
                    />
                </div>

                <div class="infor-product">
                    <h1><?php echo $result['Name']?></h1>
                    <p>
                        SKU : 57E3373
                        <i class="fa-solid fa-star" style="color: #eeb256"></i>
                        <i class="fa-solid fa-star" style="color: #eeb256"></i>
                        <i class="fa-solid fa-star" style="color: #eeb256"></i>
                        <i class="fa-solid fa-star" style="color: #eeb256"></i>
                        <i class="fa-solid fa-star" style="color: #eeb256"></i>
                        <span>(0 Đánh Giá)</span>
                    </p>
                    <h2>
                    <span class="price"><?php echo $result['PriceAfterSale']?></span>
                        <strike class="price" style="font-size: 16px"><?php echo $result['Price']?>đ</strike>
                        <sup
                            style="
                                background-color: #dc633a;
                                font-size: 16px;
                                color: #fff;
                                padding: 0 5px;
                            "
                            >50%</sup
                        >
                    </h2>
                    <h3>Màu Sắc : <?php echo $result['name_color']?></h3>
                    <form action="">
                        <!-- <a href="product.php">
                            <input type="text" class="green" />
                        </a>
                        <a href="product.php">
                            <input type="text" class="gray" />
                        </a> -->
                    </form>
                    <form action="">
                        <span class="size-product">S</span>
                        <span class="size-product">M</span>
                        <span class="size-product">L</span>
                        <span class="size-product">XL</span>
                        <span class="size-product">XXL</span>
                    </form>
                    <form action="" class="buttons_added">
                        <label for="" style="margin: 3px 8px 0 0"
                            >Số Lượng</label
                        >
                        <input class="minus is-form" type="button" value="-" />
                        <input
                            aria-label="quantity"
                            class="input-qty"
                            name=""
                            type="number"
                            value="1"
                            max="20"
                            min="1"
                        />
                        <input class="plus is-form" type="button" value="+" />
                    </form>
                    <div class="trade">
                        <div class="add">
                            <h4><a href="carts.php">Thêm Vào Giỏ</a></h4>
                        </div>
                        <div class="buy">
                            <h4>Mua Hàng</h4>
                        </div>
                        <div class="heart">
                            <h4><ion-icon name="heart-outline"></ion-icon></h4>
                        </div>
                    </div>
                    <div class="introuduce">
                        <li>
                            Giới Thiệu
                            <ul class="sub-intro">
                                <li>
                                    <p>
                                        Áo thun tay ngắn độ dài vừa phải mang
                                        phong cách trẻ trung năng động. <br />

                                        Họa tiết được in trên áo sẽ giúp chàng
                                        nổi bật giữa đám đông. Là sản phẩm phù
                                        hợp cho những buổi đi chơi hay hoạt động
                                        thể thao. <br />

                                        Màu sắc: Xanh Lá <br />

                                        Mẫu mặc size L: <br />

                                        Chiều cao: 1m77 <br />
                                        Cân nặng: 68kg <br />
                                        Số đo 3 vòng: 94-86-98 cm <br />
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Chi Tiết Sản Phẩm
                            <ul class="sub-intro">
                                <li>
                                    <p>
                                        Dòng sản phẩm :Men <br />
                                        Nhóm sản phẩm :Áo <br />
                                        Cổ áo :Khác <br />
                                        Tay áo :Tay ngắn <br />
                                        Kiểu dáng :Regular <br />
                                        Độ dài Dài :thường <br />
                                        Họa tiết In :hình <br />
                                        Chất liệu :Thun <br />
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Bảo Quản
                            <ul class="sub-intro">
                                <li>
                                    <p>
                                        Chi tiết bảo quản sản phẩm : <br />

                                        * Các sản phẩm thuộc dòng cao cấp
                                        (Senora) và áo khoác (dạ, tweed, lông,
                                        phao) chỉ <br />
                                        giặt khô, tuyệt đối không giặt ướt.
                                        <br />

                                        * Vải dệt kim: sau khi giặt sản phẩm
                                        phải được phơi ngang tránh bai dãn.
                                        <br />

                                        * Vải voan, lụa, chiffon nên giặt bằng
                                        tay. <br />

                                        * Vải thô, tuytsi, kaki không có phối
                                        hay trang trí đá cườm thì có thể giặt
                                        máy. <br />
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </section>


<?php
  include "footer/footer1.php";
 ?>
  <script src="assets/JS/product_event.js"></script>
  <script >
    const price = document.querySelectorAll(".price");
    function formatCurrency(amount) {
    return amount.toLocaleString("vi-VN", {
        style: "currency",
        currency: "VND",
    });
    }
    for(let i=0;i<price.length; i++){
        var value = parseInt(price[i].innerText);
        price[i].innerHTML = formatCurrency(value);
    }
    
  </script>
<?php
  include "footer/footer2.php";
 ?>