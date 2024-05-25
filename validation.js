function validation() {
    var pwd = document.getElementById("password").value;
    var cpwd = document.getElementById("cpassword").value;

    if (pwd != cpwd) {
        document.getElementById("message").innerHTML = "Password don't match";
        return false;
    } else if (pwd.length < 8) {
        document.getElementById("message").innerHTML = "Please enter atleast 8 digits password";
        return false;
    } else {
        return true;
    }
}