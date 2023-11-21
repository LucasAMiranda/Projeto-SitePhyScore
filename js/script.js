function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var errorMessage = document.getElementById("errorMessage");
    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    errorMessage.innerHTML = "";  

    if (!passwordRegex.test(password)) {
        errorMessage.innerHTML = "A senha deve conter pelo menos 1 letra, 1 número e ter no mínimo 8 caracteres.";
        return false;
    }

    if (password != confirmPassword) {
        errorMessage.innerHTML = "As senhas não coincidem";
        return false;
    } else {
        errorMessage.innerHTML = "As senhas coincidem.";
        return true;
    }
}

