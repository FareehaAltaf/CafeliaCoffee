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

top.visible_id = 'one'; 

function swipe() { 

    // var right_e = document.getElementById('right'); 
    // var left_e = document.getElementById('left'); 
    var home_content = document.querySelectorAll('.slide');

if (top.visible_id == 'one') {
    home_content[0].style.display = 'none'; 
    home_content[1].style.display = 'flex'; 
    top.visible_id = 'two';
}
else if (top.visible_id == 'two') {
    home_content[1].style.display = 'none'; 
    home_content[2].style.display = 'flex'; 
    top.visible_id = 'three';
} else {
    home_content[2].style.display = 'none'; 
    home_content[0].style.display = 'flex'; 
    top.visible_id = 'one';
}
var t = setTimeout("swipe()",3000);
}
swipe();

// const cartButton = document.querySelector('.fa-shopping-cart');

// cartButton.addEventListener('click', function () {
//     cartButton.classList.toggle('is-active');
// });

const openBtn = document.getElementById('open-cart-btn');
const cart = document.getElementById('shopping-cart');
const closeBtn = document.getElementById('close-btn');
const backdrop = document.querySelector('.backdrop');

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);
backdrop.addEventListener('click', closeCart);

function openCart () {
    cart.classList.add('open')
    backdrop.style.display = 'block'
    setTimeout(() => {
        backdrop.classList.add('show')
    }, 0);
}

function closeCart () {
    cart.classList.remove('open')
    backdrop.classList.remove('show')
    
    setTimeout(() => {
        backdrop.style.display = 'none'
    }, 500);
}