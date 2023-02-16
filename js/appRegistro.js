//registro nutri
const body = document.body;
const form = document.formulario;
const list = document.querySelector("#formTest");

    let formPassword = formulario.userpassid;
    let formPasswordTest = list.querySelector("#userpasswordTest");
    
    formPassword.addEventListener("focusout", validationEmpty);
    formPassword.addEventListener("keyup", userpasswordVadalidation);
    function userpasswordVadalidation() {
        var userpassword = formPassword.value.length;
        var passwordRegrex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;
        if (userpassword == 0 || userpassword < 8) {
            formPasswordTest.textContent = "La contraseña del usuario debe tener minimo " + 8 + " caracteres.";
            formPasswordTest.style.color = "red";
            return false;
        } else if (!formPassword.value.match(passwordRegrex)) {
            formPasswordTest.textContent = "La contraseña debe de tener mínimo un caracter especial, un número, un caracter en mayúsculas y otro en minúsculas.";
            formPasswordTest.style.color = "red";
            return false;
        }
        else {
            formPasswordTest.textContent = "Correcto.";
            formPasswordTest.style.color = "green";
            return true;
        }
    }
    
    let formUsername = formulario.username;
    let formUsernameTest = list.querySelector("#usernameTest");
    
    formUsername.addEventListener("focusout", validationEmpty);
    formUsername.addEventListener("keyup", usernameValidation);
    
    function usernameValidation() {
        var userName = formUsername.value.length;
        var userLetters = /^[A-Za-z]+$/;
        if (userName == 0 || userName < 3) {
            formUsernameTest.textContent = "El nombre del usuario debe tener mínimo " + 3 + " caracteres y máximo " + 20 + ".";
            formUsernameTest.style.color = "red";
            return false;
        } else if (!formUsername.value.match(userLetters)) {
            formUsernameTest.textContent = "El usuario solo puede utilizar caracteres alfabeticos.";
            formUsernameTest.style.color = "red";
            return false;
        }
        else {
            formUsernameTest.textContent = "Correcto.";
            formUsernameTest.style.color = "green";
            return true;
        }
    }
    
    let formEmail = formulario.useremail;
    let formEmailTest = list.querySelector("#useremailTest");
    
    formEmail.addEventListener("focusout", validationEmpty);
    formEmail.addEventListener("keyup", useremailValidation);
    
    function useremailValidation() {
        var userEmail = formEmail.value.length;
        var emailLetters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (userEmail == 0 || userEmail < 5) {
            formEmailTest.textContent = "El email usuario debe tener mínimo " + 5 + " caracteres.";
            formEmailTest.style.color = "red";
            return false;
        } else if (!formEmail.value.match(emailLetters)) {
            formEmailTest.textContent = "Formato de email incorrecto.";
            formEmailTest.style.color = "red";
            return false;
        }
        else {
            formEmailTest.textContent = "Correcto.";
            formEmailTest.style.color = "green";
            return true;
        }
    }    