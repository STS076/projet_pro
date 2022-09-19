
// JS permettant de supprimer les messages d'erreurs lorsque nous entrons des données dans l'input
let allInput = document.querySelectorAll('input');

allInput.forEach(element => {
    element.addEventListener('keyup', function(){
        let inputName = this.id
        let span = document.querySelector(`[data-span="error-${inputName}"]`);
        span.innerText = ''
    })
});