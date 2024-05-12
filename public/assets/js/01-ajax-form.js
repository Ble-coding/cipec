$(document).ready(function() {
    // Lorsque le formulaire est soumis
    $('form.default-form2').submit(function(event) {
        // Empêcher le comportement par défaut du formulaire (rechargement de la page)
        event.preventDefault();
        
        // Récupérer les données du formulaire
        var formData = new FormData($(this)[0]);
        
        // Envoyer les données via AJAX
        $.ajax({
            url: $(this).attr('action'), // L'URL de la route d'envoi définie dans l'attribut action du formulaire
            type: 'POST', // Méthode HTTP POST
            data: formData, // Les données du formulaire
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                // Si la requête est réussie, afficher un message de succès
                $('#success-message').show();
                $('#error-message').hide();
                $('form.default-form2')[0].reset();
            },
            error: function(xhr, status, error) {
                // Si la requête échoue, afficher un message d'erreur
                $('#success-message').hide();
                $('#error-message').show();
            }
        });
    });
});
