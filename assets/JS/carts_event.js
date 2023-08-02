const minus_button = document.querySelector(".minus");
const plus_button = document.querySelector(".plus");
const quantity = document.querySelector(".input-qty");
const price_product = document.querySelector(".price-product input");
const price = Number(price_product.value);
const total_price_product = document.querySelector(".total-product span");
const total_price_all_product = document.querySelector(".total-all-product");
const temporary = document.querySelector(".temporary");
const transport_fee = document.querySelector(".transport-fee");
const total_bill = document.querySelector(".total-bill");
const voucher = document.querySelector(".total-bill");

// CSS VNĐ of
voucher.innerHTML = formatCurrency(0 * 1000);
total_price_product.innerHTML = formatCurrency(price * quantity.value * 1000);
total_price_all_product.innerHTML = formatCurrency(
    price * quantity.value * 1000
);
temporary.innerHTML = formatCurrency(price * quantity.value * 1000);
transport_fee.innerHTML = formatCurrency(30000);
total_bill.innerHTML = formatCurrency(price * quantity.value * 1000 + 30000);
// Hàm định dạng số thành định dạng tiền tệ
function formatCurrency(amount) {
    return amount.toLocaleString("vi-VN", {
        style: "currency",
        currency: "VND",
    });
}
// minus
minus_button.addEventListener("click", function () {
    if (quantity.value > 1) {
        quantity.value = quantity.value - 1;
    }
    total_price_product.innerHTML = formatCurrency(
        price * quantity.value * 1000
    );
    total_bill.innerHTML = formatCurrency(
        price * quantity.value * 1000 + 30000
    );
    total_price_all_product.innerHTML = formatCurrency(
        price * quantity.value * 1000
    );
    temporary.innerHTML = formatCurrency(price * quantity.value * 1000);
});
// plus
plus_button.addEventListener("click", function () {
    quantity.value = parseInt(quantity.value) + 1;
    total_price_product.innerHTML = formatCurrency(
        price * quantity.value * 1000
    );
    total_bill.innerHTML = formatCurrency(
        price * quantity.value * 1000 + 30000
    );
    total_price_all_product.innerHTML = formatCurrency(
        price * quantity.value * 1000
    );
    temporary.innerHTML = formatCurrency(price * quantity.value * 1000);
});
//
