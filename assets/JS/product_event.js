const minus_button = document.querySelector(".minus");
const plus_button = document.querySelector(".plus");
var quantity = document.querySelector(".input-qty");

// xử lý tăng giảm số lượng sản phẩm
minus_button.addEventListener("click", function () {
    if (quantity.value > 1) {
        quantity.value = quantity.value - 1;
    }
});
plus_button.addEventListener("click", function () {
    quantity.value = Number(quantity.value) + 1;
});

// xử lý chọn Size

const size = document.querySelectorAll(".size-product");

for (let i = 0; i < size.length; i++) {
    size[i].addEventListener("click", function () {
        for (let j = 0; j < size.length; j++) {
            size[j].style.background = "white";
            size[j].style.color = "black";
        }
        size[i].style.background = "black";
        size[i].style.color = "white";
    });
}
