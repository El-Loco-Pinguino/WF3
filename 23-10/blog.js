$(function() {
	// Dès la soumission du message
	$('form').on('submit', function(blog) {
		blog.preventDefault()
		// Aller chercher tout ce qui a été saisi via le formulaire
		var tousLesChamps = $(this).serialize()
		var idVal = $('[name=id]').val()
		var msgVal = $('[name=corps]').val()
		var dateMsg = Date.now()

		// Envoi au serveur
		$.ajax({
			url: "blog.php",
			// Transmettre ces données
			data: tousLesChamps,
			success: function(repServeur) {
				// - Afficher cette réponse
				$('idVal').text(repServeur).show()
				$('#commentaires').text(repServeur).show()
				$('#dateMessage').html().show()
			},
		})
	})
})