<?php
  include "header/header1.php";
 ?>
 <link rel="stylesheet" href="assets/CSS/carts.css">

 <?php
  include "header/header2.php";
 ?>

        <section class="container">
            <div class="top-container">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <li><a href="carts.php ">Giỏ Hàng</a></li>
                </ul>
            </div>

            <div class="center-container">
                <div class="pic-product">
                    <table border="0" class="table-bill">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Số Lượng</th>
                            <th>Tổng tiền</th>
                            <!-- <th></th> -->
                        </tr>
                        <tr>
                            <td class="name-product">
                                <div class="img-product">
                                    <a href="product.php"
                                        ><img
                                            src="assets/IMG/aophong.jpg"
                                            alt=""
                                    /></a>
                                </div>
                                <div class="info-product">
                                    <h1>Áo Xanh In Hình</h1>
                                    <p>Màu sắc: Xanh ngọc</p>
                                    <p>Size : S</p>
                                </div>
                            </td>
                            <td class="price-product">
                                <input type="text" value="699.000"  readonly/><sup
                                    >đ</sup
                                >
                            </td>
                            <td class="quantity-product">
                                <form action="" class="buttons_added">
                                    <input
                                        class="minus is-form"
                                        type="button"
                                        value="-"
                                    />
                                    <input
                                        aria-label="quantity"
                                        class="input-qty"
                                        max="200"
                                        min="1"
                                        name=""
                                        type="number"
                                        value="1"
                                    />
                                    <input
                                        class="plus is-form"
                                        type="button"
                                        value="+"
                                    />
                                </form>
                            </td>
                            <td class="total-product">
                                <span disabled></span>
                            </td>
                            <td class="col-last">
                                <label for="check-bill">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="ionicon"
                                        viewBox="0 0 512 512"
                                    >
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M368 368L144 144M368 144L144 368"
                                        />
                                    </svg>
                                </label>
                                <input
                                    type="checkbox"
                                    name=""
                                    id="check-bill"
                                    class="input-check-bill"
                                />
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="bill-product">
                    <div class="bill">
                        <div class="cart-product">
                            <h1>Tóm Tắt Đơn Hàng</h1>
                            <div>
                                <p>Tổng sản phẩm</p>
                                <p>1</p>
                            </div>
                            <div>
                                <p>Tổng tiền hàng</p>
                                <p class="total-all-product"></p>
                            </div>
                            <div>
                                <p>Giảm Voucher</p>
                                <p class="voucher">0 đ</p>
                            </div>
                            <div>
                                <p>Tạm Tính</p>
                                <p class="temporary"></p>
                            </div>
                            <div>
                                <p>Phí vận chuyển</p>
                                <p class="transport-fee"></p>
                            </div>
                            <div>
                                <p>Tiền Thanh Toán</p>
                                <p class="total-bill"></p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-cart">
                        <a href="page_purched.php"><h1>Thanh Toán</h1></a>
                    </div>
                </div>
            </div>
        </section>
        


        <?php
  include "footer/footer1.php";
 ?>
  <script src="assets/JS/carts_event.js"></script>
 
 
        <?php
  include "footer/footer2.php";
 

 ?>

        