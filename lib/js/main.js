// var btn_menu = document.querySelector('.btn_menu');
// var menu = document.querySelector('.menu');
// var sidebar = document.querySelector('.sidebar');
// var btn_out = document.querySelector('.btn_out');
// btn_menu.addEventListener('click',function(e) {

//     sidebar.style.display = 'block';
//     menu.style.display = 'block';
// });
// btn_out.addEventListener('click',function(e) {
//     sidebar.style.display = 'none';
//     menu.style.display = 'none';
// });

      
//         function hideCustomAlert() {
//             var customAlertDiv = document.querySelector(".alert");
//             customAlertDiv.style.display = "none";
//         }


// setTimeout(hideCustomAlert, 3000);

// Slide Banner 
let arrAnh = [
    "lib/img/Banner/banner_1.png",
    "lib/img/Banner/banner_2.png",
    "lib/img/Banner/banner_3.png",
    "lib/img/Banner/banner_4.png",
    "lib/img/Banner/banner_5.png",
    "lib/img/Banner/banner_6.png",
    "lib/img/Banner/banner_7.png",
    "lib/img/Banner/banner_8.png",
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

document.addEventListener('DOMContentLoaded', function () {
    const verticalTitle = document.querySelector('.vertical-title');
    const verticalMenu = document.querySelector('.vertical-menu-area nav');
    const verticalTitleIcon = verticalTitle.querySelector('i');
  
    verticalTitleIcon.addEventListener('click', function () {
      verticalMenu.classList.toggle('show-nav');
      verticalTitleIcon.classList.toggle('fa-angle-down');
      verticalTitleIcon.classList.toggle('fa-angle-up');
    });
  
    const navLinks = document.querySelectorAll('.vertical-menu-area .nav-item > a');
  
    navLinks.forEach(function (navLink) {
      const dropdown = navLink.nextElementSibling;
      const dropdownIcon = navLink.querySelector('i');
  
      if (dropdown && dropdown.classList.contains('menu-dropdown-lv1')) {
        navLink.addEventListener('click', function (e) {
          e.preventDefault();
          dropdown.classList.toggle('show');
          dropdownIcon.classList.toggle('fa-angle-down');
          dropdownIcon.classList.toggle('fa-angle-up');
  
          const dropdownLv2Links = dropdown.querySelectorAll('.nav-dropdown-item-lv1 > a');
  
          dropdownLv2Links.forEach(function (dropdownLv2Link) {
            const dropdownLv2 = dropdownLv2Link.nextElementSibling;
  
            if (dropdownLv2 && dropdownLv2.classList.contains('menu-dropdown-lv2')) {
              dropdownLv2Link.addEventListener('click', function (e) {
                e.preventDefault();
                dropdownLv2.classList.toggle('show');
                dropdownLv2Link.querySelector('i').classList.toggle('fa-angle-right');
                dropdownLv2Link.querySelector('i').classList.toggle('fa-angle-down');
              });
            }
          });
        });
      }
    });
  });
  
  
  // back to top 
  const btnScrollToTop = document.getElementById('scrollToTopBtn')
  const docEl = document.documentElement
  
  document.addEventListener('scroll', () => {
      const scrollToTal = docEl.scrollHeight - docEl.clientHeight
  
      if ((docEl.scrollTop / scrollToTal) >= 0.05) {
          btnScrollToTop.hidden = false
      } else {
          btnScrollToTop.hidden = true
      }
  })
  
  btnScrollToTop.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
  });
  
  


