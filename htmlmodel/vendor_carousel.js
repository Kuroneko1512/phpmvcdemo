// vendor carousel

const carousel = document.querySelector('.vendor-carousel');
const items = carousel.querySelectorAll('.item');
let currentIndex = 0;
let isDragging = false;
let startX = 0;
let scrollLeft = 0;
let autoScroll;

function scrollToItem(index) {
    carousel.scrollTo({
        left: items[index].offsetLeft - carousel.offsetLeft,
        behavior: 'smooth'
    });
}

function handleAutoScroll() {
    currentIndex = (currentIndex + 1) % items.length;
    scrollToItem(currentIndex);
}

function handleStart(event) {
    isDragging = true;
    startX = event.type === 'touchstart' ? event.touches[0].clientX : event.clientX;
    scrollLeft = carousel.scrollLeft;
    stopAutoScroll();
    carousel.classList.add('grabbing');
}

function handleMove(event) {
    if (!isDragging) return;
    event.preventDefault();
    const currentX = event.type === 'touchmove' ? event.touches[0].clientX : event.clientX;
    const walk = currentX - startX;
    carousel.scrollLeft = scrollLeft - walk;
}

function handleEnd() {
    isDragging = false;
    startAutoScroll();
    carousel.classList.remove('grabbing');
}

function startAutoScroll() {
    stopAutoScroll();
    autoScroll = setInterval(handleAutoScroll, 2000);
}

function stopAutoScroll() {
    clearInterval(autoScroll);
}

carousel.addEventListener('touchstart', handleStart, { passive: true });
carousel.addEventListener('touchmove', handleMove, { passive: false });
carousel.addEventListener('touchend', handleEnd);

carousel.addEventListener('mousedown', handleStart);
carousel.addEventListener('mousemove', handleMove);
carousel.addEventListener('mouseup', handleEnd);
carousel.addEventListener('mouseleave', handleEnd);

startAutoScroll();