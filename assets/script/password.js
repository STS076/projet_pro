const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});



const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
const passwordconfirm = document.querySelector("#passwordconfirm");

toggleConfirmPassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = passwordconfirm.getAttribute("type") == "passwordconfirm" ? "text" : "passwordconfirm";
    passwordconfirm.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});
