// Initialise EmailJS avec ton User ID
emailjs.init("GpQdCW_NyMeikbI25");

// Ajoute un écouteur d'événement pour gérer la soumission du formulaire
document.getElementById("main-contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    // Envoi des données via EmailJS
    emailjs.sendForm('service_2z5u1yu', 'template_1zkalzl', this)
        .then(function() {
            alert("Message envoyé avec succès !");
        }, function(error) {
            alert("Erreur lors de l'envoi : " + JSON.stringify(error));
        });
});
