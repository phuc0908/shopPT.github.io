const imgPos = document.querySelectorAll(".slider img");
const imgSlider = document.querySelector(".slider");
const btList = document.querySelector(".head_left .list_cartegories");

let index = 0;
imgPos.forEach(function (image, index) {
  image.style.left = index * 100 + "%";
});

function imgSlide() {
  index++;
  if (index == 4) {
    index = 0;
  }
  console.log(index);
  imgSlider.style.left = "-" + index * 100 + "%";
}
setInterval(imgSlide, 5000);
