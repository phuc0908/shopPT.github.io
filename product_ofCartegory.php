

<?php
  include "header/header1.php";
 ?>
 <link rel="stylesheet" href="assets/CSS/index.css">
 <?php
  include "header/header2.php";
 ?>
 <?php
    include "admin/Class/Class_Product.php"  ;
?>
 <?php
    $product = new Class_Product();

    if(!isset($_GET['ID'])){
        
    }else{
        $id_cartegory=$_GET['ID'];
        $show_result = $product->show_product_on_web_ofCartegory($id_cartegory);
        
        $get_cart = $product->get_cartegory($id_cartegory);      
        $get_name_cart = $get_cart->fetch_assoc();
    }   
?>

<style>
.top-container {
    padding: 120px 0 25px 0;
    width: 100vw;
}
.container {
   display: block;
}
.top-container ul {
    display: flex;
}
.top-container ul li {
    padding-right: 20px;
    padding-left: 20px;
}
.top-container ion-icon {
    margin-top: 5px;
}
.top-container li a:hover {
    color: rgb(172, 47, 51);
}
.maincontent{
    text-align: center;

}
</style>

        <section class="container" >
        <div class="top-container">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <li><a href="product_all.php">Tất cả sản phẩm</a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>                 
                    <li><a href="index.php"><?php echo $get_name_cart['Name']?></a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                   
                </ul>
            </div>
            <div class="maincontent" id="id-content">
                <?php   
                if($show_result){
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

        