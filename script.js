function validateForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Both fields are required!");
        return false;
    }

    if (password.length < 5) {
        alert("Password must be at least 5 characters");
        return false;
    }

    return true;
}
