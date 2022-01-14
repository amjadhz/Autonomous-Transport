const password = document.querySelector("#password");
const list = document.querySelector(".focus-password");
// password check
document.addEventListener("click", showList);
password.addEventListener("mouseover", function(){
    list.style.display = "block";
});
function showList() {
    if(password !== document.activeElement) {
        list.style.display = "none";
    } else {
        list.style.display = "block";
    }
}
getPassword = function() {
    const text = document.getElementById('password').value;
    const length = document.getElementById('length');
    const lowercase = document.getElementById('lowercase');
    const uppercase = document.getElementById('uppercase');
    const number = document.getElementById('number');
    const special = document.getElementById('special');

    checkIfEightChar(text) ? length.classList.add('list-group-item-success') : length.classList.remove('list-group-item-success');
    checkIfOneLowercase(text) ? lowercase.classList.add('list-group-item-success') : lowercase.classList.remove('list-group-item-success');
    checkIfOneUppercase(text) ? uppercase.classList.add('list-group-item-success') : uppercase.classList.remove('list-group-item-success');
    checkIfOneDigit(text) ? number.classList.add('list-group-item-success') : number.classList.remove('list-group-item-success');
    checkIfOneSpecialChar(text) ? special.classList.add('list-group-item-success') : special.classList.remove('list-group-item-success');
}

function checkIfEightChar(text) {
    return text.length >= 8;
}

function checkIfOneLowercase(text) {
    return /[a-z]/.test(text);
}

function checkIfOneUppercase(text) {
    return /[A-Z]/.test(text);
}

function checkIfOneDigit(text) {
    return /[0-9]/.test(text);
}

function checkIfOneSpecialChar(text) {
    return /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(text);
}

// function togglePassword() {
//     const passInput = document.getElementById('password');
//     const togglePW = document.getElementById('togglePW');
//
//     passInput.type === "password" ? passInput.type = "text" : passInput.type = "password";
//     togglePW.textContent === "Show Password" ? togglePW.textContent = "Hide Password" : togglePW.textContent = "Show Password";
// }
