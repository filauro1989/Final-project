

// window.localStorage.setItem('name', 'pizza');
// window.localStorage.setItem('cazz', 'culo');


// let pizza = localStorage.getItem('cazz');
// console.log(pizza);

// const cart = [
//     {
//         dish: "margherita",
//         price: 5.00,
//         quantity: 3,
//     },
//     {
//         dish: "capricciosa",
//         price: 12.00,
//         quantity: 1,
//     },
//     {
//         dish: "diavola",
//         price: 9.00,
//         quantity: 2,
//     },
    
// ]

// window.localStorage.setItem('cartItem', JSON.stringify(cart));

// console.log(localStorage.getItem('cartItem'));

let cart = [];

const dish = {
    name: "",
    price: "",
    quantity: "",
}

window.localStorage.setItem('cartItem', JSON.stringify(dish));

console.log(localStorage.getItem('cartItem'));