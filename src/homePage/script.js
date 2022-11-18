window.addEventListener("load", init);

function init() {
    let cartImg = document.querySelector(".cartstyle");
    cartImg.addEventListener("click", showCart);

    // let addBtns = document.querySelectorAll(".addCart");
    // addBtns.addEventListener('click', addCart);

    let editTag = document.getElementById('editInventory');
    editTag.addEventListener('click', editQty);
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
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-color: grey; 
    }
    `;
    document.head.appendChild(style);
    
    // Show Add Member form
    let cartDiv = document.getElementById("cartDiv");
    cartDiv.classList.remove("hidden");   
}

function addCart(){
    console.log('added to cart');
}

function editQty() { 
    console.log("edit quantities");
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
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-color: grey; 
    }
    `;
    document.head.appendChild(style);
    
    // Show Add Member form
    let editDiv = document.getElementById("editDiv");
    editDiv.classList.remove("hidden");   
}