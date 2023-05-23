const bt = document.querySelector("button");
const input = document.querySelector("input");

if (input.value == null) {
    bt.addEventListener(
        "click",
        function (e) {
            e.preventDefault();
        },
        false
    );
}
