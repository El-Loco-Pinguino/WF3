$(function() {
	// A la soumission du formulaire (submit):
	$('form').on('submit', function(ev) {
		ev.preventDefault()
		// - Récupérer les informations des champs du formulaire
		var formValues = $(this).serialize() // Serialize récupère tous les champs saisissables d'un formulaire, d'un seul coup !
		var prenomVal = $('[name=prenom]').val()
		// - Les envoyer au serveur
		$.ajax({
			url: "reponse.php",
			// Transmettre ces données
			data: formValues,
			// - Récupérer la réponse du serveur
			success: function(reponseServeur) {
				// - Afficher cette réponse
				$('#reponseOK').text(reponseServeur).show()
				$('#reponseERR').hide()
			},

			error: function(reponseServeur) {
				$('#reponseERR').text("Ah euh... Ça marche pas ! L'arrivée du week-end sûrement.").show()
				$('#reponseOK').hide()
			},
		})
	})
})