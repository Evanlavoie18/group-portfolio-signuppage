function validateSignup() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    window.location.href = "index.php";
    alert("Succes, You made an account! \n Name: " + username + "\n Password: " + password);
}