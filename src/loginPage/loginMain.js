/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init
var loggedIn = false;

function init() {
 
    let btnElement = document.querySelector('button');      // select the button by query
    btnElement.addEventListener('click', authenticate);     // handles the button click event 
 
    /* Button Color Changes */
    btnElement.addEventListener('mousemove', () => {        // when hovering over the button, perform hover color change
       btnElement.classList.add('hover');
    });

    function authenticate() {
        let password = document.getElementById('password').value;
        let username = document.getElementById('username').value;

        loggedIn = login(username, password);
        loginStatus();
    }
}
 
function login(username, password) {
    var storedPassword = 'beans'
    if (username != "") {
        return password == storedPassword;
    }
}

function loginStatus() {
    if (loggedIn) {
        alert('You logged in!')
        // window.location.href = "";           ADD LINK TO ADMIN VERSION OF WEBPAGE (EDIT INVENTORY/UPLOAD IMAGES)
    }
    else {
        console.log('You are not logged in!')

        // Error Message reveal
        errorDiv.classList.remove("hidden");

        // Reset text in password input field 
        let password = document.getElementById('password').value;
        password.innerText = "";

        // Red styliziation around username/password field 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #passwordLabel, ::placeholder {
            color: red;
        }

        #password {
            border-color: red;
        }
        `;
        document.head.appendChild(style);
    }
}
 
 
 