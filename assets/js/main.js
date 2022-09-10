function loginform() {
    let form = document.getElementById("login-form");
    let mainlocation = "http://localhost/ASD/index.html";
    window.scrollTo(0, 0);

    if (window.location.href !== mainlocation) {
        window.location.href = mainlocation;
    }
    if (form.className == "hidden-login-form") {
        form.className = "visible-login-form";
    } else {
        form.className = "hidden-login-form";
    }
}
function navbarresponse() {
    let navbar = document.getElementById('nav');
    if (navbar.className == "navbar") {
        navbar.className += "-responsive";
    } else {
        navbar.className = "navbar";
    }
}

function comparepsw() {
    let psw1 = document.getElementById('psw1').value;
    let psw2 = document.getElementById('psw2').value;
    let string = document.getElementById('pswstring');

    if (psw1 !== psw2) {
        string.style.display = "block";
        string.style.color = "red";
    } else {
        string.style.display = "none";
    }
    requestAnimationFrame(comparepsw);
}

// Transfer js
let bar = document.getElementById('amount');
let num1 = document.getElementById('num1');
let num2 = document.getElementById('num2');
let num3 = document.getElementById('num3');
let num4 = document.getElementById('num4');
let num5 = document.getElementById('num5');
let num6 = document.getElementById('num6');
let num7 = document.getElementById('num7');
let num8 = document.getElementById('num8');
let num9 = document.getElementById('num9');
let num0 = document.getElementById('num0');

function clear() {
    bar.innerText = '';    
}