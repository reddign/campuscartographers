/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init
var loggedIn = false;

function init() {
 
    let btnElement = document.querySelector('button');      // select the button by query
    btnElement.addEventListener('click', authenticate);            // handles the button click event 
 
    /* Button Color Changes */
    btnElement.addEventListener('mousemove', () => {        // when hovering over the button, perform hover color change
       btnElement.classList.add('hover');
    });

    function authenticate() {
        let password = document.getElementById('password').value;

        loggedIn = login(password);
        status();
    }
}
 
function login(password) {
    var storedPassword = 'foodisgood'
    return password == storedPassword;
}

function status() {
    if (loggedIn) {
        console.log('You logged in')
        
    }
    else {
        alert("Incorrect Password!")
        let password = document.getElementById('password').value;
        password.innerText = "";
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
 
 
 