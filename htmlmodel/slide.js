
// Slide Banner 
let arrAnh = [
    "./img/Banner/banner_1.png",
    "./img/Banner/banner_2.png",
    "./img/Banner/banner_3.png",
    "./img/Banner/banner_4.png",
    "./img/Banner/banner_5.png",
    "./img/Banner/banner_6.png",
    "./img/Banner/banner_7.png",
    "./img/Banner/banner_8.png",
];
var i = 0;
var N = arrAnh.length;
var imgAnh = document.getElementById("banner_img");
imgAnh.src = arrAnh[i];

function slide() {
    i++;
    if (i > N - 1) {
        i = 0;
    }
    imgAnh.src = arrAnh[i];
    updateActiveDot();
}

var slideInterval = setInterval(slide, 3000);

// Thêm event click cho các nút trái và phải
var leftVector = document.querySelector(".bannerL");
var rightVector = document.querySelector(".bannerR");

leftVector.addEventListener("click", function () {
    clearInterval(slideInterval);
    i--;
    if (i < 0) {
        i = N - 1;
    }
    imgAnh.src = arrAnh[i];
    updateActiveDot();
    slideInterval = setInterval(slide, 2000); // Start slide interval again
});

rightVector.addEventListener("click", function () {
    clearInterval(slideInterval);
    i++;
    if (i > N - 1) {
        i = 0;
    }
    imgAnh.src = arrAnh[i];
    updateActiveDot();
    slideInterval = setInterval(slide, 2000); // Start slide interval again
});

var dotsContainer = document.getElementById("dots-container");

// Tạo các chấm dựa trên mảng ảnh
arrAnh.forEach(function (_, index) {
    let dot = document.createElement("span");
    dot.classList.add("dot");
    dot.dataset.index = index;
    dotsContainer.appendChild(dot);
});

// Cập nhật chấm đang hoạt động
function updateActiveDot() {
    let dots = dotsContainer.querySelectorAll(".dot");
    dots.forEach(function (dot, index) {
        dot.classList.toggle("active", index === i);
    });
}

updateActiveDot();

// Thêm sự kiện click cho các chấm
dotsContainer.addEventListener("click", function (event) {
    var dot = event.target;
    if (dot.classList.contains("dot")) {
        clearInterval(slideInterval);
        i = parseInt(dot.dataset.index);
        imgAnh.src = arrAnh[i];
        slideInterval = setInterval(slide, 2000); // Bắt đầu slide interval lại
        updateActiveDot(); // Cập nhật chấm đang hoạt động
    }
});