src = "https://www.google.com/recaptcha/api.js?render=6LdeH08iAAAAALqtcwdoy3J2C60ZJ6YVCUSiEHW3";

grecaptcha.ready(function () {
    grecaptcha.execute('6LdeH08iAAAAALqtcwdoy3J2C60ZJ6YVCUSiEHW3', {
        action: 'homepage'
    }).then(function (token) {
        document.getElementById('recaptchaResponse').value = token
    });
});