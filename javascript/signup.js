/* Inscription au site */
const form = document.querySelector(".signup form");
const validationBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault(); //Empeche la soumission du formulaire
}

validationBtn.onclick = () => {
    //Mise en place d'AJAX
    let xhr = new XMLHttpRequest(); //Création de XML
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {


    }
    xhr.send();
}