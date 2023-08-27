function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var address = document.forms["contactForm"]["address"].value;
    var message = document.forms["contactForm"]["message"].value;
    
    if (name === "" || email === "" || address === "" || message === "") {
        alert("All fields are required.");
        return false;
    }
    
    return true;
}
