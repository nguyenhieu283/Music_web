function arePasswordsMatching() {
	return password.value === confirm_password.value;
}

function canSubmit() {
	return arePasswordsMatching();
}

$(document).ready(function(){
	$('#submit').click(function(e){
		if(canSubmit()){
			$('span').css({display: 'none'});
		}else{
			// prevent submit event when password not match
			e.preventDefault();
			$('span').css({display: 'block'});
		}
	})
});


