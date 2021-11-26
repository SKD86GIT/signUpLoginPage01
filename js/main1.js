// function save_data() {
//         const form_element = getElementsByClassName('form_data');
//         let form_data = new FormData();
//         for (let count = 0; count < form_element.length; count+=1) {
//             form_data.append(form_element[count].name, form_element[count].value);
//         }
//         document.getElementById('submit').disabled = true;

//         let ajax_request = new XMLHttpRequest();
//         ajax_request.open('POST', './php/includes/signup.inc.php');
//         ajax_request.send(form_data);
//         ajax_request.onreadystatechange = function () {
//             if (ajax_request.readyState == 4 && ajax_request.status == 200) {
//                 document.getElementById('submit').disabled = false;
//                 let response = JSON.parse(ajax_request.responseText);
        
//                 if (response.success != '') {
//                     document.getElementById('form').reset();
//                     let message = document.getElementById('message');
//                     message.innerHTML = response.success;
//                     setTimeout(function () {
//                         message.innerHTML = '';
//                     }, 3000);
//                     let error = '';
//                     let errors = document.getElementsByClassName('text-danger');
//                     errors.forEach((e) => {
//                         e.innerHTML = '';
//                     });
//                 }
//             } else {
//                 document.getElementById('message').innerHTML= response.emptyInput_error;
//                 document.getElementById('name_error').innerHTML= response.name_error;
//                 document.getElementById('email_error').innerHTML= response.emailTaken_error;
//                 document.getElementById('email_error').innerHTML= response.email_error;
//                 document.getElementById('pwd_error').innerHTML= response.pwd_error;
//                 document.getElementById('pwdRepeat_error').innerHTML= response.pwdRepeat_error;
//             }
//         }
// }

// document.getElementById('submit').addEventListener('submit', save_data);



/* Password Visibility */
const eyeBtn = document.getElementById("eyeBtn");
const eyeBtn1 = document.getElementById("eyeBtn1");


// function toggleVisibility() {
//     const passwordType = document.getElementById("password1");

//     if (passwordType.type === "password") {
//         passwordType.type = "text";
//     } else {
//         passwordType.type = "password";
//     }
// }

eyeBtn.addEventListener('click', (e) => {
    e.preventDefault();
        
    const passwordType = document.getElementById("password1");
    const icon1 = document.getElementById("icon");

    if (passwordType.type === "password") {
        passwordType.type = "text";
        icon1.innerText = "visibility";
    } else {
        passwordType.type = "password";
        icon1.innerText = "visibility_off";

    }
});
eyeBtn1.addEventListener('click', (e) => {
    // e.preventDefault();
    
    const passwordType = document.getElementById("repeatPassword");
    const icon1 = document.getElementById("icon1");

    if (passwordType.type === "password") {
        passwordType.type = "text";
        icon1.innerText = "visibility";
    } else {
        passwordType.type = "password";
        icon1.innerText = "visibility_off";

    }
});
/* Password Visibility Ends*/

/* Password Validation starts */
// const eyeBtn = document.getElementById("fa-eye");
const passwordType = document.getElementById("password1");
const btn = document.querySelector(".btn-primary");
let ids = null, cls = null, pwd = null;


function addClass(ids, cls) {
    document.getElementById(ids).classList.add(cls);
}
function removeClass(ids, cls) {
    document.getElementById(ids).classList.remove(cls);
}
function addClassOnIcons(ids, cls) {
    document.getElementById(ids).firstElementChild.classList.add(cls);
}
function removeClassOnIcons(ids, cls) {
    document.getElementById(ids).firstElementChild.classList.remove(cls);
}

function valid(ids) {
    addClass(ids, "valid");
    removeClass(ids, "invalid");
    addClassOnIcons(ids, "fa-check");
    removeClassOnIcons(ids, "fa-times");
 }
function invalid(ids) {
    addClass(ids, "invalid");
    removeClass(ids, "valid");
    addClassOnIcons(ids, "fa-times");
    removeClassOnIcons(ids, "fa-check");
}
 
function validatePassword (pwd) {
    if (pwd.match("^(?=.{8,})")) {
        valid("length");
    } else {
        invalid("length");
    }
    if (pwd.match("^(?=.*[A-z])")) {
        valid("letter");
    } else {
        invalid("letter");
    }
    if (pwd.match("^(?=.*[A-Z])")) {
        valid("capital");
    } else {
        invalid("capital");
    }
    if (pwd.match("^(?=.*[0-9])")) {
        valid("number");
    } else {
        invalid("number");
    }
    
    if (pwd.match("^(?=.*[!@#$%^&*])")) {
        valid("special");
    } else {
        invalid("special");
    }
    
}

/* eyeBtn.addEventListener('click', (e) => {
    e.preventDefault();
    
   if (passwordType.type === "password") {
        passwordType.type = "text";
        addClass("fa-eye", "fa-eye");
        removeClass("fa-eye", "fa-eye-slash");
    } else {
        passwordType.type = "password";
        addClass("fa-eye", "fa-eye-slash");
        removeClass("fa-eye", "fa-eye");
    }
 });*/

passwordType.addEventListener("keyup", (e) => {
    e.preventDefault();
    // removeClass("pwd-info", "hide");
    validatePassword(passwordType.value);
});
// btn.addEventListener("click", (e) => { e.preventDefault(); });

passwordType.addEventListener('blur', (e) => {
    e.preventDefault();
    addClass("pwd-info", "hide");
},);
passwordType.addEventListener('focus', (e) => {
    e.preventDefault();
    removeClass("pwd-info", "hide");
    // validatePassword(passwordType.value);
},);


// =====================/* Password Validation ends */==========================================

