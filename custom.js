$(document).ready(function(){
	$("#contactForm").submit(function( event ){
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'contact_me.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});

		return false;
	});
});