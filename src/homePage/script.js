window.addEventListener("load", init);

function init() {
    let cartImg = document.querySelector(".cartstyle");
    cartImg.addEventListener("click", showCart);

    let addBtns = document.querySelectorAll(".addCart");
    addBtns.addEventListener('click', addCart);
}

function showCart() { 
    console.log("Showing Cart");
    // if (items = "") {
    //     console.log("Your Pantry Cart is Empty");
    // }
    // Darken the page
    let sidenav = document.querySelector(".sidenav");
    sidenav.classList.add("darken");
    let main = document.querySelector(".main");
    main.classList.add("darken");
    let content = document.querySelector(".content");
    content.classList.add("darken");
    // Darken the background color
    // var style = document.createElement('style');
    // style.innerHTML = ` 
    // body {
    //     background-image: linear-gradient(to top, #000034, rgb(96, 119, 149)); 
    // }
    // `;
    // document.head.appendChild(style);

    // Show Add Member form
    let cartDiv = document.getElementById("cartDiv");
    cartDiv.classList.remove("hidden");   
}

function addCart(){
    console.log('added to cart');
}