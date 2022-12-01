<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>

<script type="text/javascript">
    window.addEventListener("load", init);

    function init() {
        let cartImg = document.querySelector(".cartstyle");
        cartImg.addEventListener("click", showCart);

        // let addBtns = document.querySelectorAll(".addCart");
        // addBtns.addEventListener('click', addCart);

        let editTag = document.getElementById('editInventory');
        editTag.addEventListener('click', editQty);

        <?php 
        if (isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES") {
        ?>
            console.log("Logged In!");
            let adminTabs = document.getElementById("adminTabs");
            adminTabs.classList.remove("hidden");
        <?php
        } else {
        ?>
            console.log("Not Logged In!")
            let adminTabs = document.getElementById("adminTabs");
            adminTabs.classList.add("hidden");
        <?php
        }
        ?>
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
</script>
