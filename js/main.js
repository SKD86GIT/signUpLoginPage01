const form = document.getElementById('form');
const fullName = document.getElementById('fullName');
const email = document.getElementById('email');
const password = document.getElementById('password');
const repeatPassword = document.getElementById('repeatPassword');

//show error function
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    const small = formControl.querySelector('small');
}
function isValidEmail(email) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegex.test(email);
}
function isValidPassword(password) {
    const passwordRegex = /^[A-Za-z0-9@$%&*\s]+$/;
    return passwordRegex.test(password);
}
function isValidateName(fullName){
    const nameRegex = /^[A-Za-z\s]+$/; // firstname or lastname containing only letters
    return nameRegex.test(fullName);
}


//event listners
form.addEventListener('click', function (e) {
    e.preventDefault();

    if (fullName.value === '') {
        showError(fullName, 'This field is required!');
    } else if (!isValidateName(fullName.value)){
        showError(fullName, 'Invalid Name format!');
    } else {
        showSuccess(fullName);
    }

    if (email.value === '') {
        showError(email, 'This field is required!');
    } else if (!isValidEmail(email.value)){
        showError(email, 'Invalid email format!');
    }else {
        showSuccess(email);
    }

    if (password.value === '') {
        showError(password, 'This field is required!');
    } else if (!isValidPassword(password.value)){
        showError(password, 'Invalid password format!');
    } else if (((password.value).length)<8) {
        showError(password, 'Invalid password format!', prompt('Password must be 8 characters long and should contains only A-Z,a-z,0-9 and special chatacters @,#,$,%,*,&'));
    } else {
        showSuccess(password);
    }

    if (repeatPassword.value === '') {
        showError(repeatPassword, 'This field is required!');
    } else {
        showSuccess(repeatPassword);
    }

});