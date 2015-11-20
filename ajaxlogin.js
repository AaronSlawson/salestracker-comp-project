$(function(){
	$("#login").click(function(){
		var email = $("#email").val();
		if (email == ""){
			$('.errormess').html('Please enter your e-mail address');
			return false;
		}
		var password = $("#password").val();
		if (password == ""){
			$('.errormess').html('Please enter your password');
			return false;
		}
		
		$.ajax({
			type:"POST",
			url:"login.php",
			data:'email='+ email + '&password=' + password,
			beforeSend: function(){ $("#login").val('Connecting...');},
			success: function(html){
				if (html){
					
					window.location.href = 'homepage.php';
				}else{
					$('.errormess').html('Incorrect email or password');
					$("#login").val('Log in');
				}
			}
		});
		return false
	});
});