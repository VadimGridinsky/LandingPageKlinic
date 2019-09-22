$(document).ready(function(){
	$("#Send").submit(function(e) {
		e.preventDefault()
			var form_data = $(this).serialize(); 
			$.ajax({
			type: 'POST', 
			url: 'php/index.php', 
			data: form_data,
					success: function(data){ 
					alert('все ок'); 
					}
			});
	});
});    