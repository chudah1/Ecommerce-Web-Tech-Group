/* Getting the form and button from the HTML file. */
const login_form = document.getElementById("login_form");
const login_btn = document.getElementById("login_btn");
const register_form = document.getElementById("register");
const register_btn = document.getElementById("register_btn");
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Adding event listener to the register form to prevent default submission behavior
if(register_btn){
register_form.addEventListener("submit", (e) => {
    e.preventDefault(); // Prevents the default form submission behavior

    let form_data = new FormData(register_form);

    fetch("processing.php", {
        method: "POST",
        body: form_data
    })
    .then(res => console.log(res.json()))
    .then(data => {
        if (data.success) {
            alert("Registered successfully. Proceed to Login")
            window.location.href = "login.php";
        } else {
            // Display error message to the user
            alert(data.message);
            emailInput.value = form_data.get("email")
            passwordInput.value  = form_data.get("password")
        }
    })
    .catch(err => {
        // Display error message to the user
        alert("There was an error processing your request. Please try again.")
    });
})
}

// Adding event listener to the login form to prevent default submission behavior
if(login_btn){
login_form.addEventListener("submit", (e) => {
    e.preventDefault(); // Prevents the default form submission behavior

    const form_data = new FormData(login_form);

    fetch("login_processing.php", {
        method: "POST",
        body: form_data
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert("logged in successsful")
            window.location.href = "index.php";
        } else {
            // Display error message to the user
            alert(data.message);
        }
    })
    .catch(err => {
        // Display error message to the user
        alert("There was an error processing your request. Please try again.");
        console.error(err);
    });
})
}
