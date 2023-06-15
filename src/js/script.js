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
//! uncomment later
// function swipe() { 

//     // var right_e = document.getElementById('right'); 
//     // var left_e = document.getElementById('left'); 
//     var home_content = document.querySelectorAll('.slide');

// if (top.visible_id == 'one') {
//     home_content[0].style.display = 'none'; 
//     home_content[1].style.display = 'flex'; 
//     top.visible_id = 'two';
// }
// else if (top.visible_id == 'two') {
//     home_content[1].style.display = 'none'; 
//     home_content[2].style.display = 'flex'; 
//     top.visible_id = 'three';
// } else {
//     home_content[2].style.display = 'none'; 
//     home_content[0].style.display = 'flex'; 
//     top.visible_id = 'one';
// }
// var t = setTimeout("swipe()",3000);
// }
// swipe();
//!

// const cartButton = document.querySelector('.fa-shopping-cart');

// cartButton.addEventListener('click', function () {
//     cartButton.classList.toggle('is-active');
// });

const ITEMS = [
    {
        id: 1,
        name: 'Acai Bowl',
        price: 5.50,
        image: 'menu-8.jpg',
        qty: 1
    },
    {
        id: 2,
        name: 'Sandwich Muncher',
        price: 10.99,
        image: 'dish-2.jpeg',
        qty: 1
    },
    {
        id: 3,
        name: 'Pancake Lover',
        price: 12.99,
        image: 'dish-1.jpeg',
        qty: 1
    },
    {
        id: 4,
        name: 'Waffle Baffle',
        price: 12.99,
        image: 'dish-3.png',
        qty: 1
    },
]

const openBtn = document.getElementById('open-cart-btn');
const cart = document.getElementById('shopping-cart');
const closeBtn = document.getElementById('close-btn');
const backdrop = document.querySelector('.backdrop');
const itemsEl = document.querySelector('.box-container');
const cartItems = document.querySelector('.cart-items');
const itemsNum = document.getElementById('items-num');
const subtotalPrice = document.getElementById('subtotal-price');

const itemsList = document.querySelector('.items-list');
const totalPrice = document.querySelector('.total-price');


let cart_data = []

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);
backdrop.addEventListener('click', closeCart);

renderItems();
renderCartItems();
renderCheckoutItems();

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


// 1. get items from database
// 2. create a div/img/price/name for each item tags using js
// 3. add the classes (box / shoppingcart) for the styling.

// Add Items to Cart
function addItem(idx, itemId) {
    // find same items
    const foundItem = cart_data.find(
        (item) => item.id.toString() === itemId.toString()
    )
    if (foundItem) {
        increaseQty(itemId)
    }else {
        cart_data.push(ITEMS[idx])
    }
    updateCart();
    openCart();
}

// Remove Cart Items
function removeCartItem(itemId) {
    cart_data = cart_data.filter((item) => item.id != itemId)
    updateCart()
    updateCheckout()
}

// Increase item qty
function increaseQty(itemId) {
    cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty + 1} : item)
    updateCart()
    updateCheckout()
}

// Decrease item qty
function decreaseQty(itemId) {
    cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty > 1 ? item.qty - 1 : item.qty} : item)
    updateCart()
    updateCheckout()
}

//  Calculate Items Number
function calcItemsNum() {
    let itemsCount = 0

    cart_data.forEach(item => itemsCount += item.qty)

    itemsNum.innerText = itemsCount
}

// Calculate Subtotal price
function calcSubtotalPrice() {
    let subtotal = 0

    cart_data.forEach((item) => (subtotal += item.price*item.qty))

    subtotalPrice.innerText = subtotal.toFixed(2)
    totalPrice.innerText = subtotal.toFixed(2)
}


// Render Items //! Have a look at this
function renderItems() {
    ITEMS.forEach((item, idx) => {
        const itemEl = document.createElement('div')
        itemEl.classList.add('box')
        // const addToCartBtn = document.querySelector('div.box a.btn')
        // addToCartBtn.addEventListener('click', () => addItem(idx))
        // itemEl.onclick = () => addItem(idx)
        itemEl.innerHTML = `
            <img class="dish-img" src="images/${item.image}" alt="">
            <h3>${item.name}</h3>
            <span>$${item.price}</span>
            <a class="btn" onclick="addItem(${idx},${item.id})" >add to cart</a>
            `
        itemsEl.appendChild(itemEl)

    })
}

// Display / Render Cart Items
function renderCartItems() {
    // remove everything from cart
    cartItems.innerHTML = ''
    // add new data
    cart_data.forEach(item => {
        const cartItem = document.createElement('div')
        cartItem.classList.add('cart-item')
        cartItem.innerHTML = `
        <div class="remove-item" onclick="removeCartItem(${item.id})">
            <span>&times;</span>
        </div>
        <div class="item-img">
            <img src="images/${item.image}" alt="">
        </div>
        <div class="item-details">
            <p>${item.name}</p>
            <strong>$${item.price}</strong>
            <div class="qty">
                <span onclick="decreaseQty(${item.id})">-</span>
                <strong>${item.qty}</strong>
                <span onclick="increaseQty(${item.id})">+</span>
            </div>
        </div>
        `
        cartItems.appendChild(cartItem)
    })
}

function updateCart() {
    //rerender cart items with updated data
    renderCartItems()
    // Update Items Number in cart
    calcItemsNum()
    // Update Subtotal Price
    calcSubtotalPrice()
}


// const loginBtns = document.querySelector('.login-btn');
// loginBtns.addEventListener('click', selectButton);

// function selectButton() {
//     loginBtns.classList.toggle('selected');
// }

// toggle the color of the buttons based on if they are selected

const loginBtn = document.getElementById('login-btn');
const signupBtn = document.getElementById('signup-btn');

loginBtn.addEventListener('click', () => {
    loginBtn.classList.add('active');
    // signupBtn.classList.remove('active');
    console.log('login');
});

signupBtn.addEventListener('click', () => {
    signupBtn.classList.add('active');
    // loginBtn.classList.remove('active');
    console.log('signup');
});


// Display Cart Items in checkout page
function renderCheckoutItems() {
    // remove everything from cart
    itemsList.innerHTML = ''
    // add new data
    cart_data.forEach(item => {
        const itemsListEl = document.createElement('div')
        itemsListEl.classList.add('item')
        itemsListEl.innerHTML = `
                <div class="remove-item" onclick="removeCartItem(${item.id})">
                    <span>&times;</span>
                </div>
                <div class="checkout-item-img"> 
                    <img src="images/${item.image}" style="width: 100%;" alt="">
                </div>
                <div class="checkout-item-details">
                    <p>${item.name}</p>
                    <strong>$${item.price}</strong>
                    <div class="qty">
                        <span onclick="decreaseQty(${item.id})">-</span>
                        <strong>${item.qty}</strong>
                        <span onclick="increaseQty(${item.id})">+</span>
                    </div>
                </div>
        `
        itemsList.appendChild(itemsListEl)
    })
}

function updateCheckout() {
    //rerender cart items with updated data
    renderCheckoutItems()
    // Update Items Number in cart
    calcItemsNum()
    // Update Subtotal Price
    calcSubtotalPrice()
    console.log('updateCheckout');
    console.log(cart_data);
}

document.addEventListener("DOMContentLoaded", function() {
    console.log('DOM fully loaded and parsed');
    renderCheckoutItems();
    console.log(cart_data);
  });