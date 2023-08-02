<?php
include "admin/Class/Class_Product.php"  ;
?>
<?php
include "header/header1.php";
?>
<link rel="stylesheet" href="assets/CSS/index.css">
<?php
include "header/header2.php";
?>
<?php
$product = new Class_Product();
$show_result = $product->show_product_on_web_index();
?>

        <div class="slider">
            <img src="assets/IMG/slider_3.jpg" />
        </div>
        <section class="container">
            <div class="sidebarone">
                <li>
                    <a href="#">ÁO</a>
                    <ul>
                    <li class="item-li"><a href="product_ofCartegory.php?ID=50">Áo Sơ Mi</a></li>
                            <li class="item-li"><a href="product_ofCartegory.php?ID=52">Áo Thun</a></li>
                            <li class="item-li"><a href="product_ofCartegory.php?ID=51">Áo Polo</a></li>
                     
                    </ul>
                </li>
                <li>
                    <a href="#">QUẦN</a>
                    <ul>
                    <li class="item-li"><a href="product_ofCartegory.php?ID=56">Quần Jean</a></li>
                            <li class="item-li"><a href="product_ofCartegory.php?ID=53">Quần Tây</a></li>                      
                            <li class="item-li"><a href="product_ofCartegory.php?ID=55">Quần Khaki</a></li>
                            <li class="item-li"><a href="product_ofCartegory.php?ID=54">Quần Short</a></li>
                    </ul>
                </li>
            </div>
            <div class="maincontent" id="id-content">
                <?php   
                if($show_result){
                    $i=0;
                    while($result = $show_result->fetch_assoc()){
                ?>

                <div class="list__product">
                    <a href="product.php?ID=<?php echo $result['ID']?>">
                        <div>
                            <img src="admin/upload/<?php echo $result['Img'] ?>" alt="" />
                        </div>
                    </a>
                    <p style="text-align: center">
                    <?php echo $result['Name'] ?><br />
                       <span style="font-size: smaller;"> Màu : <?php echo $result['name_color'] ?></span><br>
                        <span class="price"><?php echo $result['PriceAfterSale'] ?> </span>
                    </p>
                </div>  

                <?php
                    }
                }
                ?>          
            </div>
        </section>
        <?php
  include "footer/footer1.php";
 ?>
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

        