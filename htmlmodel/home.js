
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

