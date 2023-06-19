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

var cart_items_id = []

openBtn.addEventListener('click', openCart);
closeBtn.addEventListener('click', closeCart);
backdrop.addEventListener('click', closeCart);
// addToCartBtn.addEventListener('click', addToCart);

// renderItems();
renderCartItems();
// renderCheckoutItems();

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
localStorage.clear();

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
        //? Put the thingy in the local thingy
        localStorage.setItem('cart_items_id', JSON.stringify(cart_items_id))
        console.log("cart_items_id set in local storage")
    }
    else {
        cart_items_id.push({
            id: item_id,
            qty: 1
        })
        console.log("cart_items_id = "+cart_items_id)
        item_ids.push(item_id)
        //? Put the thingy in the local thingy
        localStorage.setItem('cart_items_id', JSON.stringify(cart_items_id))
        console.log("cart_items_id set in local storage")
        
    }

    
    
    // updateCart();
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


    cart_items_id = cart_items_id.map((item) => {
        if (item.id == item_id) {
            console.log("increasing item.qty = "+item.qty)
            item.qty += 1
        }
        return item
    })
    console.log("cart_items_id = "+cart_items_id)


    
    updateCart();
    openCart();
}

// Remove Cart Items
function removeCartItem(itemId) {
    cart_data = cart_data.filter((item) => item.id != itemId)
    
    // console.log(item_id);
    console.log(item_ids);
    // console.log("OOGABOOGA");
    item_ids = item_ids.filter((item) => item != itemId);
    console.log("item_ids after deleting that item:");
    console.log(item_ids);

    console.log(item_ids.toString());
    console.log("("+item_ids.toString()+")");
    var id_list = "("+item_ids.toString()+")";

    localStorage.setItem('id_list', id_list);


    updateCart();
    // updateCheckout()
}

// Increase item qty
function increaseQty(itemId) {
    // cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty + 1} : item)
    cart_items_id = cart_items_id.map((item) => {
        if (item.id == itemId) {
            item.qty += 1
            console.log("increasing item.qty = "+item.qty)
        }
        return item
    })
    cart_items_id.forEach((cartitem) => {
        console.log("cartitem.id = "+cartitem.id+" cartitem.qty = "+cartitem.qty)
    })
    
    localStorage.setItem('cart_items_id', JSON.stringify(cart_items_id))
    console.log("cart_items_id set in local storage")
    
    updateCart()
    // updateCheckout()

    //yahan dalo

}

// Decrease item qty
function decreaseQty(itemId) {
    // cart_data = cart_data.map((item) => item.id.toString() === itemId.toString() ? {...item, qty: item.qty > 1 ? item.qty - 1 : item.qty} : item)
    
    
    cart_items_id = cart_items_id.map((item) => {
        if ((item.id == itemId) && (item.qty > 1)) {
            item.qty -= 1
            console.log("decreasing item.qty = "+item.qty)
        }
        return item
    })

    cart_items_id.forEach((cartitem) => {
        console.log("cartitem.id = "+cartitem.id+" cartitem.qty = "+cartitem.qty)
    })

    localStorage.setItem('cart_items_id', JSON.stringify(cart_items_id))
    console.log("cart_items_id set in local storage")

    

    updateCart()
    // updateCheckout()
}

//  Calculate Items Number
function calcItemsNum() {//TODO: sada sahi karo
    let itemsCount = 0

    // cart_items_id = localStorage.getItem('cart_items_id');

    cart_items_id.forEach(item => itemsCount += item.qty)

    id_list = localStorage.getItem('id_list');
    console.log("yeh lo id_list: "+id_list);
    arrayy = id_list.split(',');
    console.log("yeh lo id_list array: "+arrayy);
    arrLength = arrayy.length;
    console.log("yeh lo id_list array length: "+arrLength);

    itemsNum.innerText = itemsCount
}

// Calculate Subtotal price
function calcSubtotalPrice() {
    // let subtotal = 0
    // var quantity = 0

    // cart_items_id.forEach((item) => (subtotal += item.price*item.qty))

    



    var id_list = localStorage.getItem('id_list');
    console.log("Subtotal wala: id_list: "+id_list);

    
    var url = './cart.php?x='+id_list;

    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function (body) {

        subtotal = 0

        console.log("Subtotal new call");

        
        body.forEach((item) =>  {

            quantity = 0

            console.log(item);

            cart_items_id.forEach(element => {
                // console.log("Key: " + element.id + " qty: " + element.qty);
                if (item.itemID == element.id) {    // match the id
                    // console.log("Key Found: " + element.id + " With qty: " + element.qty);
                    quantity = element.qty;         // get the quantity
                }
                
            });

            subtotal += item.price * quantity
        })

    console.log("subtotal body===========================================================================");
    console.log(body);
    console.log(subtotal);

    subtotalPrice.innerText = subtotal.toFixed(2)
    // totalPrice.innerText = subtotal.toFixed(2)

    });

















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
    
    const customerID = document.getElementById('customerID').value;
    
    localStorage.setItem('customerID', customerID);
    
    console.log("Saved Customer ID: "+customerID);

    //? 1. Make the sql query based off of the array item_ids
    //? 2. run the sql query -> get the items from the database √
    //? 3. display the items in the cart using while loop of php √

    // for now: trying it on index.php file √

    // console.log(item_ids)
    // console.log("("+item_ids.toString()+")");          // => (1,4,3)
    // id_list = "("+item_ids.toString()+")"
    // query = `SELECT * FROM menu WHERE itemID IN (${id_list})` //? √


    const cartItems = document.querySelector('.cart-items');
    // cartItems.innerHTML = 'WEEEEEEEEEEEEEEEEEEEE';

    var id_list = localStorage.getItem('id_list');
    console.log("id_list: "+id_list);

    
    var url = './cart.php?x='+id_list;

    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function (body) {
        console.log("new call");
        cartItems.innerHTML = '';
        var quantity;
        body.forEach((item) =>  {

            console.log(item);

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cart_items_id.forEach(element => {
                // console.log("Key: " + element.id + " qty: " + element.qty);
                if (item.itemID == element.id) {
                    // console.log("Key Found: " + element.id + " With qty: " + element.qty);
                    quantity = element.qty;
                }
                
            });
            cartItem.innerHTML = `
            
            <div class="cart-item">
                    <div class="remove-item" onclick="removeCartItem(${item.itemID})">
                        <span>&times;</span>
                    </div>
                    <div class="item-img">
                        <img src="images/${item.image}" alt="">
                    </div>
                    <div class="item-details">
                        <p>${item.itemName}</p>
                        <strong>$ ${item.price} </strong>
                        <div class="qty">
                            <span onclick="decreaseQty(${item.itemID})">-</span>
                            <strong>${quantity}</strong>
                            <span onclick="increaseQty(${item.itemID})">+</span>
                        </div>
                    </div>
                </div>
            `
            cartItems.appendChild(cartItem);

        })

       


    
    console.log("body===========================================================================");
    console.log(body);
    });



   
}

function test() {

    var cart_items_id = JSON.parse(localStorage.getItem('cart_items_id'));
    cart_items_id.forEach(element => {
        var order_details_url = './order.php?id='+element.id+'&qty='+element.qty;
        
        fetch(order_details_url)
        .then (function (response){
            return response.text();
        })
        .then (function (body) {
            console.log(body);
            // window.location.href = "order.php";
            
        })
    });


}

function order() {
    
    // get the item ids and create query for order table

    console.log("me order hoon")

    // get the customer id
    customerID = localStorage.getItem('customerID');
    console.log("get customerID from local storage: "+customerID);

    // const customerID = document.getElementById('customerID').value;
    // console.log("==+== customerID: "+customerID);

    // cart_items_id = JSON.parse(localStorage.getItem('cart_items_id'));

    // create the order and get its order id
    var insert_order_url = './create-order.php?cid='+customerID;

    fetch(insert_order_url)
    .then (function (response) {
        return response.text();
    })
    .then (function (orderID) {
        console.log("testing this function");
        console.log(orderID);

        var cart_items_id = JSON.parse(localStorage.getItem('cart_items_id'));
        cart_items_id.forEach(element => {

            var order_details_url = './order.php?id='+element.id+'&qty='+element.qty+'&oid='+orderID;
            
            fetch(order_details_url)
            .then (function (response){
                return response.text();
            })
            .then (function (body) {
                console.log(body);
                window.location.href = "order-complete.php?oid="+orderID;
                
            })
    });

    })


}

// function orderComplete() {
//     const orderID = document.querySelector('.order-id');
// }

function renderOrders() {
    console.log("renderOrders");

    // 1. select orderID, customerID from orders

    var url = './render-orders.php?x=all';

    fetch(url)
    .then(function (response) {
        return response.json();
    })
    .then(function (orders) {
        // for each order, i will have a constant order id and customer id starting here..
        console.log("getting orders");
        console.log(orders);
        // const orderDetails = document.querySelector('.order-details');
        const outer = document.querySelector('.outer');
        outer.innerHTML = `
        <div class="heading-text">
            Orders to be completed
        </div>
        `;

        orders.forEach((order) =>  {
            // for each order i need to create the white div[item]
            console.log("OrderID of this order: "+order['orderID']);
            console.log("CustomerID of this order: "+order['customerID']);

            const orderItem = document.createElement('div');
            orderItem.classList.add('item');


            // const orderID = document.querySelector('.orderID');
            // orderID.innerHTML ="Order ID: " + order['orderID'];

            // const orderItem = document.createElement('div');
            // orderItem.classList.add('order-item');

            url = './get-customer.php?id='+order['customerID'];

            fetch(url)
            .then(function (response) {
                return response.text();
            })
            .then(function (customerName) {

                orderItem.innerHTML = `
                    <div class="order-details">
                        <div class="orderID">Order ID: ${order['orderID']}</div>
                        <div class="order-item${order['orderID']}"></div>
                    </div>
                    <div class="customer-details">
                        <p>Customer Name: ${customerName}(${order['customerID']})</p>
                    </div>
                    <div class="completed">
                        <span onclick="deleteOrder(${order['orderID']});">
                            <i class='bx bxs-check-square' ></i>
                        </span>
                    </div>
                `;

            })
            .then(function () {
                var url = './render-orders.php?x='+order['orderID'];
                fetch(url)
                .then(function (response) {
                    return response.json();
                })
                .then(function (order_details) {
                    // here i will get the itemID and quantity of each of the orders
                    console.log("getting order details");
                    console.log(order_details);
                    order_details.forEach((order_detail) =>  {
                        var itemID = order_detail['itemID'];
                        var quantity = order_detail['quantity'];
                        const orderItems = document.querySelector('.order-item'+order['orderID']);
    
                        // now i will get the item name using the itemID
                        var itemName =  "";
                        var customerName;
                        // try using joins instead of searching for the item name through item id
                        url = './get-item-name.php?id='+itemID;
                        fetch(url)
                        .then(function (response) {
                            return response.text();
                        })
                        .then(function (item_name) {
                            console.log("getting item names");
                            console.log(item_name);
                            // order_items.push(item_name+": "+quantity);
                            // save the item name in a variable so u can use it in innerHTML
                            itemName = item_name.toString();
                            console.log("itemName: "+itemName);
                            //TODO: do the same for customer name
                        })
                        .then(function () {
                            
                            console.log("itemName outside: "+itemName);
        
                            orderItems.innerHTML += `
                            <div class = "order-item">${itemName} : ${quantity}</div>
                            `;
                        })
                    })
                })
            })
            // orderItem.innerHTML = order_items.join("<br>");
            outer.appendChild(orderItem);

        })
    })


}

function deleteOrder(orderID) {
    console.log("deleteOrder");
    var url = './delete-order.php?id='+orderID;
    fetch(url)
    .then(function (response) {
        return response.text();
    })
    .then(function (body) {
        console.log(body);
        renderOrders();
    })
}


function checkout() {


    console.log("me checkout hoon")


    const itemsList = document.querySelector('.items-list');
    // cartItems.innerHTML = 'WEEEEEEEEEEEEEEEEEEEE';

    var id_list = localStorage.getItem('id_list');
    console.log("id_list: "+id_list);

    
    var url = './cart.php?x='+id_list;

    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function (body) {
        console.log("new call");
        itemsList.innerHTML = '';
        var quantity;
        var total = 0
        
        body.forEach((item) =>  {

            console.log(item);

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            
            cart_items_id = JSON.parse(localStorage.getItem('cart_items_id'));
            // console.log("cart_items_id: "+cart_items_id[0].id);
            quantity = 0;

            cart_items_id.forEach(itemEl => {

                console.log("Key: " + itemEl.id + " qty: " + itemEl.qty);

                if (item.itemID == itemEl.id) {
                    console.log("Key Found: " + itemEl.id + " With qty: " + itemEl.qty);
                    quantity = itemEl.qty;
                }

                
            });
            total += item.price * quantity;

            // cart_items_id.forEach(element => {
            //     // console.log("Key: " + element.id + " qty: " + element.qty);
            //     if (item.itemID == element.id) {    // match the id
            //         // console.log("Key Found: " + element.id + " With qty: " + element.qty);
            //         quantity = element.qty;         // get the quantity
            //     }
                
            // });
            const itemsListEl = document.createElement('div');
            itemsListEl.classList.add('item');

            itemsListEl.innerHTML = `
            
                
                <div class="checkout-item-img"> 
                    <img src="images/${item.image}" style="width: 100%;" alt="">
                </div>
                <div class="checkout-item-details">
                    <p>${item.itemName}</p>
                    <div class = "checkout-info">
                        <strong>$${item.price}</strong>
                        <div class="qty">
                            <strong>Qty: ${quantity}</strong>
                        </div>
                    </div>
                </div>
            `;
            
            itemsList.appendChild(itemsListEl);

        })

        const totalPrice = document.querySelector('.total-price');


        totalPrice.innerHTML = total.toFixed(2);

       


    
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
// function renderCheckoutItems() {
//     // remove everything from cart
//     itemsList.innerHTML = ''
//     // add new data
//     cart_data.forEach(item => {
//         const itemsListEl = document.createElement('div')
//         itemsListEl.classList.add('item')
//         itemsListEl.innerHTML = `
//                 <div class="remove-item" onclick="removeCartItem(${item.id})">
//                     <span>&times;</span>
//                 </div>
//                 <div class="checkout-item-img"> 
//                     <img src="images/${item.image}" style="width: 100%;" alt="">
//                 </div>
//                 <div class="checkout-item-details">
//                     <p>${item.name}</p>
//                     <strong>$${item.price}</strong>
//                     <div class="qty">
//                         <span onclick="decreaseQty(${item.id})">-</span>
//                         <strong>${item.qty}</strong>
//                         <span onclick="increaseQty(${item.id})">+</span>
//                     </div>
//                 </div>
//         `
//         itemsList.appendChild(itemsListEl)
//     })
// }

// function updateCheckout() {
//     //rerender cart items with updated data
//     renderCheckoutItems()
//     // Update Items Number in cart
//     calcItemsNum()
//     // Update Subtotal Price
//     calcSubtotalPrice()
//     console.log('updateCheckout');
//     console.log(cart_data);
// }

// document.addEventListener("DOMContentLoaded", function() {
//     console.log('DOM fully loaded and parsed');
//     renderCheckoutItems();
//     console.log(cart_data);
//   });