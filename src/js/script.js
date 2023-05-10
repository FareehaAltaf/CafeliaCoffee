// website learned and accessed: https://codesandbox.io/s/ozbh1?file=/index.html 
var swiper = new Swiper(".home-slider", {
    spaceBetween: 200,
    centeredSlides: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination", 
        clickable: true,
    },
    loop: true,
});



