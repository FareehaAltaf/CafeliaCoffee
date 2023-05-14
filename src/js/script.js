// website learned and accessed: https://codesandbox.io/s/ozbh1?file=/index.html 
// var swiper = new Swiper(".home-slider", {
//     spaceBetween: 200,
//     centeredSlides: true,
//     autoplay: {
//         delay: 7500,
//         disableOnInteraction: true,
//     },
//     pagination: {
//         el: ".swiper-pagination", 
//         clickable: true,
//     },
//     loop: true,
// });
let navbar = document.querySelector('.navbar');

// ====================== scroll sections active link  =======================

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');


// window.onscroll

window.onscroll = () => {
    // console.log("Haaiiii");
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop -150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        // console.log(id);

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*= ' + id + ']').classList.add('active');
            });
        };
    });
    // ====================== sticky navbar  =======================
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    // ====================== remove toggle icon and navbor when clicked navbar link (scroll)  =======================
    // menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};
