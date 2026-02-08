function validateForm() {

    // Fetch input values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var mobile = document.getElementById("mobile").value;

    // Name validation
    if (name === "") {
        alert("Name must not be empty");
        return false;
    }

    // Email validation
    if (email === "") {
        alert("Email must not be empty");
        return false;
    }

    // Password validation
    if (password.length < 6) {
        alert("Password must be at least 6 characters long");
        return false;
    }

    // Mobile number validation
    if (isNaN(mobile) || mobile.length !== 10) {
        alert("Enter a valid 10-digit mobile number");
        return false;
    }

    // If all validations pass
    alert("Form submitted successfully!");
    return true;
}