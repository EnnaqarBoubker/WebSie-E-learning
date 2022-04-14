const form = document.getElementById('form');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const passwordA = document.getElementById('passwordA');


form.addEventListener('submit', (e) => {
    e.preventDefault();

    validate();


});

function validate() {
    //get the value from the inputs,
    const usernameValue = userName.value.trim();
    const emailValue = email.value.trim();
    const passwordAValue = passwordA.value.trim();


    if (usernameValue === '') {
        Error(userName, 'Username is not writh');
    } else {
        Success(userName);
    }

    if (emailValue === '') {
        Error(email, 'email is not writh');
    } else {
        Success(email);
    }

    if (passwordAValue === '') {
        Error(passwordA, 'password is not writh');
    } else {
        Success(passwordA);
    }
}

function Error(input, message) {
    const formControl = input.parentElement; //from-control
    const small = formControl.querySelector('.error');

    //add error message inside small
    small.innerText = message;

    //add error class
    formControl.className = 'form-control error';
}

function Success(input, message) {
    const formControl = input.parentElement; //.form-control
    formControl.className = 'form-control success';
}