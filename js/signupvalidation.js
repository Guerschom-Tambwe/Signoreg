    const validatePasswordMatch = () => {
        let password = document.querySelector("#password").value;
        let confirmPassword = document.querySelector("#confirmPassword").value;
        let confirmPasswordError = document.querySelector("#passwordConfirmError");
        let signUpButton = document.querySelector("#signup");

        if(password != confirmPassword){
        	confirmPasswordError.innerHTML = "Passwords do not match!";
        	signUpButton.disabled = true;
		}
		else {
			signUpButton.disabled = false;
			confirmPasswordError.innerHTML = "";
		}     
    }

    const validateFullName = () => {
    	let fullName = document.querySelector("#fullName");
    	let fullNameError = document.querySelector("#fullNameError");

    	fullName.addEventListener("blur", () => {

    		if (/\w+\s+\w+/.test(fullName.value)){
    			fullNameError.innerHTML = "";
    		}
    		else {
    			fullNameError.innerHTML = "Please enter your full name!";
    		}

    		if(!fullName.checkValidity() == true){
    			fullNameError.innerHTML = fullName.validationMessage;
    		}
    	});
    }

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


    const validateConfirmPassword = () => {
    	let confirmPassword = document.querySelector("#confirmPassword");
    	confirmPassword.addEventListener("blur", validatePasswordMatch);
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

    const validatePhoneNumber = () => {

    	let phoneField = document.querySelector("#phone");
    	let phoneFieldError = document.querySelector("#phoneError");

    	phoneField.addEventListener("blur", () => {
    		if(phoneField.checkValidity() == false){
    			phoneFieldError.innerHTML = phoneField.validationMessage;
    		}
    		else{
    			phoneFieldError.innerHTML = "";
    		}
    	});
    }


	document.addEventListener("DOMContentLoaded", () => {
	  
	  validateConfirmPassword();
	  validateFullName();
	  validatePhoneNumber();
	  validatePassword();
	  validateEmailAddress();

	});