function validateForm() {
    let firstName = document.getElementById("First_Name").value;
    let lastName = document.getElementById("Last_Name").value;
    let username = document.getElementById("User_Name").value;
    let password = document.getElementById("Password").value;

    error = "";

    let isValid = (!!firstName);

    if (!isValid) error = "First name is empty";

    isValid = isValid && lastName;

    if ((!isValid) && (!error)) error = "Last name is empty";
    
    isValid = isValid && username;

    if ((!isValid) && (!error)) error = "Username is empty";

    isValid = isValid && password;

    if ((!isValid) && (!error)) error = "Password is empty";

    isValid = isValid && (password.length >= 8);

    if ((!isValid) && (!error)) error = "Password should be more than 8 characters";

    if (isValid) alert("Validation succeeded");
    else alert(error);

    return isValid;
}