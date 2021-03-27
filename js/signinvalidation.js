    const validatePassword = () => {
        let password = document.querySelector("#password");
        let passwordError = document.querySelector("#passwordError");

        password.addEventListener("blur", () => {
            if(!password.checkValidity() == true){
                passwordError.innerHTML = password.validationMessage;
            }
            else{
                passwordError.innerHTML = "";
            }
        });
    }

    const validateEmailAddress = () => {
        let emailId = document.querySelector("#email_id");
        let emailError = document.querySelector("#emailError");

        emailId.addEventListener("blur", () => {
            if(emailId.checkValidity() == false){
                emailError.innerHTML = emailId.validationMessage;
            }
            else{
                emailError.innerHTML = '';
            }
        });
    }


    document.addEventListener("DOMContentLoaded", () => {
      validatePassword();
      validateEmailAddress();

    });