// website learned and accessed: https://codesandbox.io/s/ozbh1?file=/index.html 

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

// const addToCartBtn = document.querySelector('.atc');


let cart_data = []

let item_ids = []

let cart_items_id = []

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);
backdrop.addEventListener('click', closeCart);
// addToCartBtn.addEventListener('click', addToCart);

// renderItems();
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

//? WORKING ON THIS RN !!

// item_ids.push(1);
// item_ids.push(2);
// item_ids.push(3);
// console.log(item_ids)

function addToCart(item_id) {
    // QUERY:
    // 1. check if item_id is already in cart : 
    // 2. if not, add item_id to cart
    // 3. if yes, increase qty of item_id in cart

    // const itemFound = item_ids.find((id) => id === item_id)

    // if (itemFound) {
    //     increaseQty(item_id)
    // } else {
    //     item_ids.push(item_id)
    // }

    //let sql = `INSERT INTO cart (item_id) VALUES (${item_id})`
    //const cartItems = document.querySelector('.cart-items');
    // cartItems.innerHTML = ''
    console.log("cart_items_id = "+cart_items_id)

    if (cart_items_id. find(
        (item) => item.id === item_id
    )) {
        cart_items_id = cart_items_id.map((item) => {
            if (item.id == item_id) {
                console.log("increasing item.qty = "+item.qty)
                item.qty += 1
            }
            return item
        })
        console.log("cart_items_id = "+cart_items_id)
        // console.log(cart_items_id)
    }
    else {
        cart_items_id.push({
            id: item_id,
            qty: 1
        })
        console.log("cart_items_id = "+cart_items_id)
        item_ids.push(item_id)
        
    }

    
    updateCart();
    openCart();
    console.log(cart_items_id);

    
    console.log(item_id);
    console.log(item_ids);
    console.log("OOGABOOGA");

    console.log(item_ids.toString());
    console.log("("+item_ids.toString()+")");
    var id_list = "("+item_ids.toString()+")";

    localStorage.setItem('id_list', id_list);

    updateCart();
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

//addItem()
// localstorage.add (key and value:id)
// localstorage.get (key)

// Display / Render Cart Items


function increaseQtyinCart(itemId) {
    cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty + 1} : item)
    updateCart()
    updateCheckout()
}
function renderCartItems() {
    console.log("renderCartItems")

    //? 1. Make the sql query based off of the array item_ids
    //? 2. run the sql query -> get the items from the database √
    //? 3. display the items in the cart using while loop of php √

    // for now: trying it on index.php file √

    // console.log(item_ids)
    // console.log("("+item_ids.toString()+")");          // => (1,4,3)
    // id_list = "("+item_ids.toString()+")"
    // query = `SELECT * FROM menu WHERE itemID IN (${id_list})` //? √


    const cartItems = document.querySelector('.cart-items');
    cartItems.innerHTML = '';
    // cartItems.innerHTML = 'WEEEEEEEEEEEEEEEEEEEE';

    var id_list = localStorage.getItem('id_list');
    console.log("id_list: "+id_list);

    
    var url = './test.php?x='+id_list;

    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function (body) {
        // body.forEach((item) =>  {

        //     const cartItem = document.createElement('div');
        //     cartItem.classList.add('cart-item');
        //     current_item = cart_items_id.find((cartitem) => {
        //         if (cartItem.id == item.itemID) {
        //         console.log(" item.id: "+cartitem.id+" item.qty: "+cartitem.qty+" itemID: "+ item.itemID + " ==: "+(cartitem.id == item.itemID));
        //         }
                
        //     })
        //     cartItem.innerHTML = `
            
        //     <div class="cart-item">
        //             <div class="remove-item" onclick="removeCartItem(${item.itemID})">
        //                 <span>&times;</span>
        //             </div>
        //             <div class="item-img">
        //                 <img src="images/${item.image}" alt="">
        //             </div>
        //             <div class="item-details">
        //                 <p>${item.itemName}</p>
        //                 <strong>$ ${item.price} </strong>
        //                 <div class="qty">
        //                     <span onclick="decreaseQty(${item.itemID})">-</span>
        //                     <strong>xx</strong>
        //                     <span onclick="increaseQty(${item.itemID})">+</span>
        //                 </div>
        //             </div>
        //         </div>
        //     `
        //     cartItems.appendChild(cartItem);

        // })

       


    
    console.log("body===========================================================================");
    console.log(body);
    });



   
    }


    







    // remove everything from cart
    //cartItems.innerHTML = ''
    // add new data
    // cart_data.forEach(item => {
    //     const cartItem = document.createElement('div')
    //     cartItem.classList.add('cart-item')
    //     cartItem.innerHTML = `
    //     <div class="remove-item" onclick="removeCartItem(${item.id})">
    //         <span>&times;</span>
    //     </div>
    //     <div class="item-img">
    //         <img src="images/${item.image}" alt="">
    //     </div>
    //     <div class="item-details">
    //         <p>${item.name}</p>
    //         <strong>$${item.price}</strong>
    //         <div class="qty">
    //             <span onclick="decreaseQty(${item.id})">-</span>
    //             <strong>${item.qty}</strong>
    //             <span onclick="increaseQty(${item.id})">+</span>
    //         </div>
    //     </div>
    //     `
    //     cartItems.appendChild(cartItem)
    // })
    // cartItems.innerHTML = `
    //  <?php 
     
    
    
    
    // `
    
    
    
    


function updateCart() {
    //rerender cart items with updated data
    renderCartItems()
    // Update Items Number in cart
    //calcItemsNum()
    // Update Subtotal Price
   // calcSubtotalPrice()
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